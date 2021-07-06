@extends('layout.master')
@section('content')
      <!-- Education-->
   <section class="resume-section" id="education">
    <div class="resume-section-content">
        <h2 class="mb-5">Education</h2>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">Palestine Technical College</h3>
                <div class="subheading mb-3">Bachelor of Computer Systems Engineering</div>
                <div>Computer Science - Web Development Track</div>
                {{-- <p>GPA: 3.23</p> --}}
            </div>
            <div class="flex-shrink-0"><span class="text-primary">August 2017 - May 2021</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="flex-grow-1">
                <h3 class="mb-0">Abu Zar Ghafari High School</h3>
                
                {{-- <p>GPA: 3.56</p> --}}
            </div>
            <div class="flex-shrink-0"><span class="text-primary">August 2016 - May 2017</span></div>
        </div>
    </div>
</section>
<hr class="m-0" />

@endsection
