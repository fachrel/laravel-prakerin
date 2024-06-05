<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Request;
use Livewire\Component;
use App\Models\Attendance;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.app')]
class AttendancesPage extends Component
{
    use WithPagination;
    public $student;
    public $attendance;
    public $myAttendances;
    public $teacherStudentAttendance;
    public $attendances;
    #[Validate('required')]
    public $status = null;

    public function take_attendance(){
        $current_time = Carbon::now()->toTimeString();
        // dd($current_time);
        $industry = Auth::user()->requests->first()->industry;
        // dd($industry);
        $start_time = $industry->entry_time;
        $end_time = $industry->exit_time;

            if(!$this->attendance->isEmpty()){
                $attendance = $this->attendance->first();
                if($this->status == null){
                    $attendance->update([
                        'exit_time' => Carbon::now()->toTimeString(),
                    ]);
                }elseif($this->status == 'sick' || $this->status == 'leave'){
                    $attendance->update([
                        'exit_time' => null,
                    ]);
                }

            }else{
                // if ($current_time >= $start_time && $current_time <= $end_time) {
                    if($this->status == null){
                        Attendance::create([
                            'user_id' => $this->student->user->id,
                            'entry_time' => Carbon::now()->toTimeString(),
                            'exit_time' => null,
                            'status' => null,
                        ]);
                    }elseif($this->status == 'sick' || $this->status == 'leave'){
                        Attendance::create([
                            'user_id' => $this->student->user->id,
                            'entry_time' => null,
                            'exit_time' => null,
                            'status' => $this->status,
                        ]);
                    }

                // } else {
                //     flash()->addError('Jam absen anda diluar jam kerja/terlambat.');
                // }
            }

        // $this->render();
    }

    public function render()
    {
        $currentDate = Carbon::now()->toDateString();

        $this->student = Auth::user()->students->first();
        if($this->student){
            $this->attendance = Attendance::where('user_id', $this->student->user->id)->whereDate('created_at', $currentDate)->get();
            $this->myAttendances = Attendance::where('user_id', $this->student->user->id)->get();
        }
        $teacher = Auth::user()->teachers->first();

        if ($teacher) {
            // Retrieve the IDs of the teacher's students
            $studentIds = $teacher->requests->pluck('user_id');

            // Retrieve the attendance records for the teacher's students
            $teacherStudentAttendance = Attendance::whereIn('user_id', $studentIds)->paginate(10);
        } else {
            // If no teacher found, return an empty collection
            $teacherStudentAttendance = collect();
        }
        // $this->attendance = Attendance::paginate(10);
        // dd($teacherStudentAttendance);
        return view('livewire.attendances-page', [
            'teacherAttendances' => $teacherStudentAttendance
        ]);
    }
}
