<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Kyslik\ColumnSortable\Sortable;

class Complaint extends Model
{
    use Sortable;
    protected $fillable = ['title','body','status'];
    protected $sortable = ['status','created_at', 'updated_at','author','title'];

    //Relationship
    public function user(){
      return $this->belongsTo(User::class);
    }

    //custom attribute
    public function getAuthorAttribute(){
      //Kalau ada user, ambil username, kalau tiada, kosong.
      return isset($this->user) ? $this->user->name : '';
    }

    //When it is called at index or any view file, it will be submit_Date
    public function getSubmitDateAttribute(){
      return $this->created_at->diffForHumans();
    }

    public function getTitleAttribute(){
      return Str::title($this->attributes['title']);
    }

    public function getStatusAttribute(){
      return $this->attributes['status'];
    }
}
