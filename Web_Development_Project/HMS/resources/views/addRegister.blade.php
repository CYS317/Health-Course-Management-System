@extends('layout')

@section('content')
<div class="row justify-content-center my-5">
    <div class="col-md-8">
        <div class="card shadow-lg">
            <div class="card-header text-white text-center" style="background-color: #5bc0de;">
                <h3>Add New Register</h3>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('addRegister') }}" method="post" enctype='multipart/form-data'>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter email address" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter phone number" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="day_of_week" class="form-label">Select a Day</label>
                            <select id="day_of_week" name="day_of_week" class="form-select" required>
                                <option value="">-- Choose a Day --</option>
                                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                    <option value="{{ $day }}">{{ $day }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="course" class="form-label">Select a Course</label>
                            <select id="course" name="course" class="form-select" required>
                                <option value="">-- Choose a Course --</option>
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
                            <label for="coach" class="form-label">Select a Coach</label>
                            <select id="coach" name="coach" class="form-select" required>
                                <option value="">-- Choose a Coach --</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="price" class="form-label">Price (RM)</label>
                            <input type="text" id="price" name="price" class="form-control" readonly placeholder="Select a course to see the price">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Additional Message</label>
                        <textarea id="message" name="message" class="form-control" rows="3" placeholder="Enter any additional details (optional)"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn text-white px-5" style="background-color: #5bc0de;">Add New Register</button>
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

    courseField.addEventListener('change', function () {
        const selectedCourse = this.value;
        coachField.innerHTML = '<option value="">-- Choose a Coach --</option>';
        if (coachMapping[selectedCourse]) {
            coachMapping[selectedCourse].forEach(coach => {
                const option = document.createElement('option');
                option.value = coach;
                option.text = coach;
                coachField.appendChild(option);
            });
        }
        if (courseToPriceMapping[selectedCourse]) {
            priceField.value = 'RM ' + courseToPriceMapping[selectedCourse].toFixed(2);
        } else {
            priceField.value = '';
        }
    });

    document.querySelector('form').addEventListener('submit', function () {
        if (priceField.value.startsWith('RM ')) {
            priceField.value = priceField.value.replace('RM ', '');
        }
    });
</script>
@endsection
