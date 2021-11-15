@extends('layouts/backend/app')

@section('title','Student Information Details')


@section('content')

    <section class="content-wrapper mt-5">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Student Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="student_name" class="form-label">Student Name</label>
                                            <input value="{{ old('student_name') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="student_name"
                                                   placeholder="Student Name" required>

                                            @if ($errors->has('student_name'))
                                                <span class="text-danger text-left">{{ $errors->first('student_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="reg_no" class="form-label">Reg No</label>
                                            <input value="{{ old('reg_no') }}"
                                                   type="number"
                                                   class="form-control"
                                                   name="reg_no"
                                                   placeholder="Reg No" required>

                                            @if ($errors->has('reg_no'))
                                                <span class="text-danger text-left">{{ $errors->first('reg_no') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="money_receipt_no" class="form-label">Money Receipt No</label>
                                            <input value="{{ old('money_receipt_no') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="money_receipt_no"
                                                   placeholder="Money Receipt No" required>

                                            @if ($errors->has('money_receipt_no'))
                                                <span class="text-danger text-left">{{ $errors->first('money_receipt_no') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="father_name" class="form-label">Father Name</label>
                                            <input value="{{ old('father_name') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="father_name"
                                                   placeholder="Father Name" required>

                                            @if ($errors->has('father_name'))
                                                <span class="text-danger text-left">{{ $errors->first('father_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mother_name" class="form-label">Mother Name</label>
                                            <input value="{{ old('mother_name') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="mother_name"
                                                   placeholder="Mother Name" required>

                                            @if ($errors->has('mother_name'))
                                                <span class="text-danger text-left">{{ $errors->first('mother_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input value="{{ old('phone') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="phone"
                                                   placeholder="Phone" required>

                                            @if ($errors->has('phone'))
                                                <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input value="{{ old('email') }}"
                                                   type="email"
                                                   class="form-control"
                                                   name="email"
                                                   placeholder="Email address" required>

                                            @if ($errors->has('email'))
                                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address" class="form-label">Address</label>
                                            <input value="{{ old('address') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="address"
                                                   placeholder="Address" required>

                                            @if ($errors->has('address'))
                                                <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="birthday" class="form-label">Birthday</label>
                                            <input value="{{ old('birthday') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="birthday"
                                                   placeholder="Birthday" required>

                                            @if ($errors->has('birthday'))
                                                <span class="text-danger text-left">{{ $errors->first('birthday') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="guardian_number" class="form-label">Guardian Number</label>
                                            <input value="{{ old('guardian_number') }}"
                                                   type="number"
                                                   class="form-control"
                                                   name="guardian_number"
                                                   placeholder="Guardian Number" required>

                                            @if ($errors->has('guardian_number'))
                                                <span class="text-danger text-left">{{ $errors->first('guardian_number') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="row">
                                          <div class="col-md-10">
                                              <div class="form-group">
                                                  <label for="image" class="form-label">Image</label>
                                                  <input value="{{ old('image') }}"
                                                         type="file"
                                                         class="form-control"
                                                         name="image"
                                                         required onchange="loadFile(event)">

                                                  @if ($errors->has('image'))
                                                      <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                                                  @endif
                                              </div>
                                          </div>
                                          <div class="col-md-2 mt-3">
                                              <img id="output" width="50px" height="50px"/>
                                          </div>
                                      </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="education_qualification" class="form-label">Education Qualification</label>
                                            <input value="{{ old('education_qualification') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="education_qualification"
                                                   placeholder="Education Qualification" required>

                                            @if ($errors->has('education_qualification'))
                                                <span class="text-danger text-left">{{ $errors->first('education_qualification') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profession" class="form-label">Profession</label>
                                            <input value="{{ old('profession') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="profession"
                                                   placeholder="Profession" required>

                                            @if ($errors->has('profession'))
                                                <span class="text-danger text-left">{{ $errors->first('profession') }}</span>
                                            @endif
                                        </div>
                                    </div> <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="course_title" class="form-label">Course Title</label>
                                            <input value="{{ old('course_title') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="course_title"
                                                   placeholder="Course title" required>

                                            @if ($errors->has('course_title'))
                                                <span class="text-danger text-left">{{ $errors->first('course_title') }}</span>
                                            @endif
                                        </div>
                                    </div> <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="total_amount" class="form-label">Total Amount</label>
                                            <input value="{{ old('total_amount') }}"
                                                   type="number"
                                                   class="form-control"
                                                   name="total_amount"
                                                   placeholder="Total Amount" required>

                                            @if ($errors->has('total_amount'))
                                                <span class="text-danger text-left">{{ $errors->first('total_amount') }}</span>
                                            @endif
                                        </div>
                                    </div> <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="amount_paid" class="form-label">Amount Paid</label>
                                            <input value="{{ old('amount_paid') }}"
                                                   type="number"
                                                   class="form-control"
                                                   name="amount_paid"
                                                   placeholder="Amount Paid" required>

                                            @if ($errors->has('amount_paid'))
                                                <span class="text-danger text-left">{{ $errors->first('amount_paid') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="balance_due" class="form-label">Balance Due</label>
                                            <input value="{{ old('balance_due') }}"
                                                   type="number"
                                                   class="form-control"
                                                   name="balance_due"
                                                   placeholder="Balance due" required>

                                            @if ($errors->has('balance_due'))
                                                <span class="text-danger text-left">{{ $errors->first('balance_due') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="admission_date" class="form-label">Admission Date</label>
                                            <input value="{{ old('admission_date') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="admission_date"
                                                   placeholder="Admission Date" required>

                                            @if ($errors->has('admission_date'))
                                                <span class="text-danger text-left">{{ $errors->first('admission_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="next_payment_date" class="form-label">Next Payment Date</label>
                                            <input value="{{ old('next_payment_date') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="next_payment_date"
                                                   placeholder="Next Payment Date" required>

                                            @if ($errors->has('next_payment_date'))
                                                <span class="text-danger text-left">{{ $errors->first('next_payment_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="weekly_class" class="form-label">Weekly Class</label>
                                            <input value="{{ old('weekly_class') }}"
                                                   type="text"
                                                   class="form-control"
                                                   name="weekly_class"
                                                   placeholder="Weekly Class" required>

                                            @if ($errors->has('weekly_class'))
                                                <span class="text-danger text-left">{{ $errors->first('weekly_class') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="weekly_class" class="form-label">Total Class</label>
                                            <input value="{{ old('total_class') }}"
                                                   type="number"
                                                   class="form-control"
                                                   name="total_class"
                                                   placeholder="Weekly Class" required>

                                            @if ($errors->has('total_class'))
                                                <span class="text-danger text-left">{{ $errors->first('total_class') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="weekly_class" class="form-label">Certificate typr</label>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                                <label for="customRadio1" class="custom-control-label">DICT</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked>
                                                <label for="customRadio2" class="custom-control-label">BTEB</label>
                                            </div>
                                            @if ($errors->has('certificate'))
                                                <span class="text-danger text-left">{{ $errors->first('certificate') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="student_availability" class="form-label">Student Availability</label>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                <label for="customCheckbox1" class="custom-control-label">Friday</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option1">
                                                <label for="customCheckbox2" class="custom-control-label">Saturday</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option1">
                                                <label for="customCheckbox3" class="custom-control-label">Sunday</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option1">
                                                <label for="customCheckbox4" class="custom-control-label">Monday</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="option1">
                                                <label for="customCheckbox5" class="custom-control-label">Tuesday</label>
                                            </div> <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="option1">
                                                <label for="customCheckbox6" class="custom-control-label">Wednessday</label>
                                            </div> <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="option1">
                                                <label for="customCheckbox7" class="custom-control-label">Thursday</label>
                                            </div>



                                            @if ($errors->has('student_availability'))
                                                <span class="text-danger text-left">{{ $errors->first('student_availability') }}</span>
                                            @endif
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save user</button>
                                <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush
