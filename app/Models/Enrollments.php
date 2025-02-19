<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
    protected $table      = 'enrollments';
    protected $primaryKey = 'id';
    protected $fillable   = [
        'enroll_no',
        'batch_id',
        'student_id',
        'join_date',
        'fee',
    ];
    public function batch()
    {
        return $this->belongsTo(Batches::class, 'batch_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    use HasFactory;
}