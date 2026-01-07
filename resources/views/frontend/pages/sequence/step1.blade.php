@extends('components.layouts.sequence.seqMaster')
@section('title', 'Step1')

@section('main-content')
    <!-- ############# Banner Area ###############-->
    <div class="bg-pattren d-flex align-items-center justify-content-center footer-bg"
        style="min-height: 280px;padding-top: clamp(4rem, 6vw, 5rem); ">
        <div class="container">
            <div class="text-center">
                <h1 class="text-white section-title" style="font-size: clamp(20px,5vw,35px)">Embark on Your Path <br> to
                    Authorship
                    Now!</h1>
                <p class="text-white m-0">Fill in the form below and let's move on to the next chapter of your successful
                    journey!</p>
            </div>
        </div>
    </div>

    <section class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12">
                    <form class="lpForm">
                        @csrf
                        <div class="bg-white border p-5 mb-3 position-relative"
                            style="box-shadow: 0 1.125rem 4.44rem rgb(22 41 92 / 6%);">
                            <div class="row">
                                <div class="col-12">
                                    <label for="" class="fw-semibold mb-2 font-xxs-17px font-md-20px">What is the
                                        Genre of your book?</label>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <label for="genres" class="d-block fw-medium mb-2">Select Your Genre</label>
                                    <div>
                                        <select id="other-div" name="data[Select Your Genre]" 
                                            class="virtual-select lpService w-100" placeholder="Select Genres">
                                            <option value="" selected disabled>Select Genres</option>
                                            <option value="Autobiography">Autobiography</option>
                                            <option value="Biography">Biography</option>
                                            <option value="Comic">Comic</option>
                                            <option value="Crime">Crime</option>
                                            <option value="Fiction">Fiction</option>
                                            <option value="Children Book">Children Book</option>
                                            <option value="Hip hop">Hip hop</option>
                                            <option value="Memoir">Memoir</option>
                                            <option value="Military">Military</option>
                                            <option value="Narrative">Narrative</option>
                                            <option value="Comedy">Comedy</option>
                                            <option value="Business Book">Business Book</option>
                                            <option value="Novel">Novel</option>
                                            <option value="Rhyme">Rhyme</option>
                                            <option value="Science Fiction">Science Fiction</option>
                                            <option value="Screen play">Screen play</option>
                                            <option value="song">Song</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>

                                    <div class="mt-3" id="show-other-div" style="display: none;">
                                        <label for="" class="d-block fw-semibold mb-2">Others</label>
                                        <input name="data[Others]" type="text" placeholder="Please mention your genre"
                                            class="form-control px-3 w-100" />
                                    </div>

                                    <div class="my-4">
                                        <label for="" class="d-block fw-medium mb-1">Is your manuscript
                                            completed?</label>
                                        <div class="d-flex mt-2 checkbox-group">
                                            <div class="d-flex align-items-center gap-2 me-5">
                                                <input class="form-check-input terms-checkbox" required type="radio"
                                                    name="data[Is your manuscript completed?]" value="Yes" name="yesno"
                                                    id="yesCheck" data-toggle="yesManuscript">
                                                <div class="radiOpt">
                                                    <label for="yesCheck" role="button"
                                                        class="fw-semibold radio-label">Yes</label>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <input class="form-check-input terms-checkbox" required type="radio"
                                                    name="data[Is your manuscript completed?]" value="No" name="yesno"
                                                    id="noCheck" data-toggle="noManuscript">
                                                <div class="radiOpt">
                                                    <label for="noCheck" role="button"
                                                        class="fw-semibold radio-label">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="yesManuscript" style="display:none">
                                        <label class="d-block fw-medium mb-3">Please mention the number of pages</label>
                                        <input name="data[Please mention the number of pages]" type="number" min="1"
                                            class="form-control w-100 px-3 p-2" placeholder="Number of pages">
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <label class="d-block fw-medium mb-2">Select Your Services *</label>
                                    <select name="data[Select Your Services]" multiple data-search="false"
                                        placeholder="Services I Need" class="virtual-select lpService w-100">
                                        <option value="Book Editing">Book Editing</option>
                                        <option value="Book Publishing">Book Publishing</option>
                                        <option value="Book Marketing">Book Marketing</option>
                                        <option value="Audio Book Production">Audio Book Production</option>
                                        <option value="Author Website Development">Author Website Development</option>
                                        <option value="Book Cover Design">Book Cover Design</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border p-5" style="box-shadow: 0 1.125rem 4.44rem rgb(22 41 92 / 6%);">
                            <label for="" class="fw-semibold d-block mb-1 font-xxs-17px font-md-20px">How can we
                                reach out to you if we have any questions?</label>
                            <p class="text-dark font-xxs-16px">Your information is maintained with utmost privacy and
                                confidentiality.</p>
                            <div class="d-flex flex-column gap-3">
                                <div>
                                    <label class="d-block fw-semibold mb-2">Name *</label>
                                    <input type="text" name="name"
                                        class="form-control bg-transparent w-100 ps-3 name" required
                                        placeholder="Your Name">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div>
                                    <label class="d-block fw-semibold mb-2">Email *</label>
                                    <input type="email" name="email"
                                        class="form-control bg-transparent  w-100 ps-3 email" placeholder="Your Email">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div
                                    style="--iti-spacer-horizontal: 20px; --iti-selected-country-arrow-padding: 63px; --iti-border-width: 0px; --iti-search-padding: 20px;">
                                    <label class="d-block fw-semibold mb-2">Phone *</label>
                                    <input type="tel" class="phone form-control bg-transparent  w-100 ps-8"
                                        placeholder="Your Number" id="stepOnePhone" name="phone">
                                    <input type="hidden" name="code" id="code">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="text-end mt-4">
                                <div class="border-1 border-danger my-2 bg-white p-1 rounded-2 text-danger mb-3 w-100"
                                    style="display:none" id="errormsg"></div>
                                <button type="submit"
                                    class="btn btn-primary btn-to-dark sequenceformsubmit text-uppercase">Submit</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script>
        $('#genres').on('change', function() {
            $('#genres_other_field').val('');
            if ($(this).val() == 'other') {
                $('#genre_other_div').css('display', 'block');
            } else {
                $('#genre_other_div').css('display', 'none');
            }
        })

        function yesnoCheck() {
            var ifYes = document.getElementById('ifYes');
            var yesCheck = document.getElementById('yesCheck');
            var noCheck = document.getElementById('noCheck');
            var numberOfPagesInput = document.getElementById('number_of_pages');

            if (yesCheck.checked) {
                ifYes.style.display = 'block';
                numberOfPagesInput.required = true;
            } else if (noCheck.checked) {
                ifYes.style.display = 'none';
                numberOfPagesInput.required = false;
            }
        }
    </script>
@endpush
