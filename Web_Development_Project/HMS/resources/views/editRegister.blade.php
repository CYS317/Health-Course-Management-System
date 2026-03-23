@extends('layout')

@section('content')

<div class="row justify-content-center my-5">
    <div class="col-md-8">
        <div class="card shadow-lg">
            <div class="card-header text-white text-center" style="background-color: #5bc0de;">
                <h3>Edit Register</h3>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('updateRegister') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @foreach($registers as $register)
                    <div class="form-group mb-3">
                        <label for="name">Full Name</label>
                        <input type="hidden" name="id" value="{{ $register->id }}">
                        <input class="form-control" type="text" id="name" name="name" required value="{{ $register->name }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email Address</label>
                        <input class="form-control" type="email" id="email" name="email" required value="{{ $register->email }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">Phone Number</label>
                        <input class="form-control" type="tel" id="phone" name="phone" required value="{{ $register->phone }}">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="day_of_week">Select a Day</label>
                            <select class="form-control" id="day_of_week" name="day_of_week" required>
                                <option value="{{ $register->day_of_week }}" selected>{{ ucfirst(strtolower($register->day_of_week)) }}</option>
                                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                    <option value="{{ $day }}">{{ ucfirst(strtolower($day)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="course">Select a Course</label>
                            <select class="form-control" id="course" name="course" required>
                                <option value="{{ $register->course }}" selected>{{ ucfirst($register->course) }}</option>
                                <option value="wingchun">Wing Chun</option>
                                <option value="swimming">Swimming</option>
                                <option value="dance">Dance</option>
                                <option value="gym">Gym</option>
                                <option value="yoga">Yoga</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="coach">Select a Coach</label>
                            <select class="form-control" id="coach" name="coach" required>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="price">Price (RM)</label>
                            <input class="form-control" type="text" id="price" name="price" readonly value="RM {{ number_format($register->price, 2) }}">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="message">Additional Message</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Enter any additional details (optional)">{{ $register->message }}</textarea>
                    </div>
                    @endforeach

                    <div class="text-center">
                        <button type="submit" class="btn text-white px-5" style="background-color: #5bc0de;">Update Registration</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const courseToPriceMapping = {
        'wingchun': 30, 
        'swimming': 35,
        'dance': 40, 
        'gym': 45, 
        'yoga': 35 
    };

    const coachMapping = {
        'wingchun': ['Master Wong', 'Daniel Yee'], 
        'swimming': ['Jordan Chen', 'Sarah Tan'],
        'dance': ['Daniel Lee', 'Emily Wong'],
        'gym': ['Jason Lim', 'Alex Tan'],
        'yoga': ['Aarav Patel', 'Priya Desai']
    };

    const courseField = document.getElementById('course');
    const coachField = document.getElementById('coach');
    const priceField = document.getElementById('price');

    const selectedCourse = "{{ $register->course }}";
    const selectedCoach = "{{ $register->coach }}";

    function populateCoachOptions(course) {
        coachField.innerHTML = '<option value="">-- Choose a Coach --</option>';
        if (coachMapping[course]) {
            coachMapping[course].forEach(coach => {
                const option = document.createElement('option');
                option.value = coach;
                option.text = coach;
                if (coach === selectedCoach) {
                    option.selected = true;
                }
                coachField.appendChild(option);
            });
        }
    }

    populateCoachOptions(selectedCourse);
    priceField.value = 'RM ' + (courseToPriceMapping[selectedCourse] || 0).toFixed(2);

    courseField.addEventListener('change', function () {
        const selectedCourse = this.value;
        populateCoachOptions(selectedCourse);
        priceField.value = 'RM ' + (courseToPriceMapping[selectedCourse] || 0).toFixed(2);
    });

    document.querySelector('form').addEventListener('submit', function () {
        if (priceField.value.startsWith('RM ')) {
            priceField.value = priceField.value.replace('RM ', '');
        }
    });
</script>

@endsection
