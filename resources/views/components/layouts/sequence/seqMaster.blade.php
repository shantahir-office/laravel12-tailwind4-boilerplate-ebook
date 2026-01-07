<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('assets/img/fav.svg') }}">
    <meta name="description"
        content="Hire the best Elite Author Publishers for your business book, ebook, memoir, or autobiography. We have professional book amzpropublisherservice for hire who are perfect for you.">


    <!-- google font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
        integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.onload=null;this.media='all'">


    <!-- intel tel input -->
    <link href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.min.css" rel="stylesheet"
        media="print" onload="this.onload=null;this.media='all'">


    <!-- virtual select -->
    <link rel="stylesheet" href="{{ asset('vendor/css/virtual-select.min.css') }}">


    <!-- Theme Files -->
    <link rel="stylesheet" href="{{ asset('sequence-assets/main.css') }}">

    <title>{{ $title ?? 'Elite Author Publishers' }}</title>



    @stack('styles')
</head>

<body>


    @include('components.layouts.sequence.seq-header')
    <main>
        @yield('main-content')
    </main>
    @include('components.layouts.sequence.seq-footer')

    {{-- Scripts --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
    <script src="{{ asset('vendor/js/virtual-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/chat.js') }}"></script>
    <script>
        function openChatWidget() {
            postMessage({
                method: "showWebWidget",
                type: "cd360Api",
                apiType: "liveChat"
            })
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.addEventListener("change", function(e) {
                if (e.target.matches('input[type="radio"][data-toggle]')) {
                    const groupName = e.target.name;
                    const allRadiosInGroup = document.querySelectorAll(
                        `input[name="${groupName}"][type="radio"]`
                    );

                    allRadiosInGroup.forEach(function(radio) {
                        const toggleId = radio.getAttribute("data-toggle");
                        if (!toggleId) return;
                        const container = document.getElementById(toggleId);
                        if (!container) return;

                        if (radio.checked) {
                            container.style.display = "block";
                            addRequired(container);
                        } else {
                            container.style.display = "none";
                            removeRequired(container);
                        }
                    });
                }

                if (e.target.matches('input[type="checkbox"][data-toggle]')) {
                    const toggleId = e.target.getAttribute("data-toggle");
                    if (!toggleId) return;
                    const container = document.getElementById(toggleId);
                    if (!container) return;

                    if (e.target.checked) {
                        container.style.display = "block";
                        addRequired(container);
                    } else {
                        container.style.display = "none";
                        removeRequired(container);
                    }
                }
            });

            function addRequired(container) {
                const inputs = container.querySelectorAll("input, textarea, select");
                inputs.forEach((input) => {
                    input.required = true;
                });
            }

            function removeRequired(container) {
                const inputs = container.querySelectorAll("input, textarea, select");
                inputs.forEach((input) => {
                    input.required = false;
                });
            }
        });
        window.addEventListener("load", function(event) {
            VirtualSelect.init({
                ele: ".virtual-select",
                search: false,
            });
            const otherdiv = document.getElementById("other-div");
            const showOtherDiv = document.getElementById("show-other-div");

            if (otherdiv) {
                otherdiv.addEventListener("change", function() {
                    if (!showOtherDiv) {
                        console.error("showOtherDiv element not found");
                        return;
                    }

                    if (otherdiv.value === "Others") {
                        showOtherDiv.style.display = "block";
                        const input = showOtherDiv.querySelector("input[type='text']");
                        if (input) input.setAttribute("required", "true");
                    } else {
                        showOtherDiv.style.display = "none";
                        const input = showOtherDiv.querySelector("input[type='text']");
                        if (input) {
                            input.removeAttribute("required");
                            input.value = "";
                        }
                    }
                });
            } else {
                console.error("otherdiv element not found");
            }
            class Phone {
                initializeIntlTelInput() {
                    const phoneInputs = document.querySelectorAll(".phone");
                    // const parent = document.querySelectorAll('.iti__country-container');
                    phoneInputs.forEach((input) => {
                        const iti = window.intlTelInput(input, {
                            // dropdownContainer: parent,
                            strictMode: true,
                            initialCountry: "us",
                            onlyCountries: [
                                "al",
                                "ad",
                                "at",
                                "au",
                                "ae",
                                "sa",
                                "at",
                                "br",
                                "ca",
                                "us",
                                "cn",
                                "dk",
                                "cz",
                                "fi",
                                "de",
                                "ge",
                                "is",
                                "jm",
                                "no",
                                "nl",
                                "mx",
                                "pl",
                                "qa",
                                "ro",
                                "ru",
                                "es",
                                "ch",
                                "se",
                                "tr",
                                "kw",
                            ],
                            geoIpLookup: function(callback) {
                                fetch("https://ipinfo.io", {
                                        method: "GET",
                                    })
                                    .then((response) => response.json())
                                    .then((data) => {
                                        var countryCode =
                                            data && data.country ? data.country : "";
                                        if (
                                            ![
                                                "al",
                                                "ad",
                                                "at",
                                                "au",
                                                "ae",
                                                "sa",
                                                "at",
                                                "br",
                                                "ca",
                                                "us",
                                                "cn",
                                                "dk",
                                                "cz",
                                                "fi",
                                                "de",
                                                "ge",
                                                "is",
                                                "jm",
                                                "no",
                                                "nl",
                                                "mx",
                                                "pl",
                                                "qa",
                                                "ro",
                                                "ru",
                                                "es",
                                                "ch",
                                                "se",
                                                "tr",
                                                "kw",
                                            ].includes(countryCode)
                                        ) {
                                            countryCode = "us";
                                        }
                                        callback(countryCode);
                                    })
                                    .catch((error) => {
                                        callback("us");
                                    });
                            },
                            showSelectedDialCode: true,
                            loadUtils: () =>
                                import(
                                    "https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/utils.js"
                                ),
                        });

                        input.iti = iti;
                    });
                }
            }

            const phone = new Phone();
            phone.initializeIntlTelInput();

            function validateDynamicInputs($form) {
                let isValid = true;
                $form
                    .find("input[required], textarea[required], select[required]")
                    .each(function() {
                        if ($(this).is(":visible") && $(this).val().trim() === "") {
                            $(this).addClass("form-error");
                            isValid = false;
                        } else {
                            $(this).removeClass("form-error");
                        }
                    });
                return isValid;
            }

            function validateEmail($form) {
                const emailField = $form.find(".email");
                const emailValue = emailField.val().trim();
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                emailField.next(".error-message").remove();

                if (!emailValue) {
                    // showError(emailField, "Email is required.");
                    emailField.addClass("form-error");
                    return false;
                } else if (!emailPattern.test(emailValue)) {
                    emailField.addClass("form-error");
                    showError(
                        emailField,
                        "Enter a valid email (e.g., user@example.com)"
                    );
                    console.log("pattern is no valid email");
                    return false;
                } else {
                    emailField.removeClass("form-error");
                    clearError(emailField);
                    return true;
                }
            }

            function showError(field, message) {
                field
                    .addClass("form-error")
                    .after(
                        `<span class="error-message text-danger ms-2" style="font-size: 70%">${message}</span>`
                    );
            }

            function clearError(field) {
                field.removeClass("form-error").next(".error-message").remove();
            }

            function validatePhone($form) {
                var phoneInput = $form.find(".phone")[0];
                if (phoneInput && phoneInput.iti) {
                    var iti = phoneInput.iti;
                    if (!iti.isValidNumber()) {
                        $form.find(".phone").addClass("form-error");
                        return false;
                    } else {
                        $form.find(".phone").removeClass("form-error");
                        return true;
                    }
                } else {
                    $form.find(".phone").addClass("form-error");
                    return false;
                }
            }

            function validateCheckbox($form) {
                let isValid = true;
                $form.find(".checkbox-group").each(function() {
                    const $group = $(this);
                    const isChecked = $group.find(".terms-checkbox").is(":checked");
                    if (!isChecked) {
                        $group.find(".servicesList").addClass("form-error");
                        $group.find(".radio-label").addClass("form-error-label");
                        isValid = false;
                    } else {
                        $group.find(".servicesList").removeClass("form-error");
                        $group.find(".radio-label").removeClass("form-error-label");
                    }
                });

                return isValid;
            }

            function validateService($form) {
                var $services = $form.find(".lpService");
                var isValid = true;
                $services.each(function() {
                    var serviceValue = $(this).val();
                    if (!serviceValue || serviceValue.length === 0) {
                        $(this).addClass("form-error");
                        isValid = false;
                    } else {
                        $(this).removeClass("form-error");
                    }
                });
                return isValid;
            }

            $(document).on("click", ".sequenceformsubmit", function(e) {
                e.preventDefault();
                var $form = $(this).closest("form");
                var $btn = $(this);
                var servicesValid = validateService($form);
                var checkboxValid = validateCheckbox($form);
                var emailValid = validateEmail($form);
                var phoneValid = validatePhone($form);
                var dynamicValid = validateDynamicInputs($form);
                var isValid =
                    servicesValid &&
                    emailValid &&
                    phoneValid &&
                    dynamicValid &&
                    checkboxValid;
                if (!isValid) {

                    return;
                }

                var name = $form.find(".name").val();
                var email = $form.find(".email").val();
                var phone = $form.find(".phone").val();

                var selectedGenre = $("#other-div").val();
                var otherGenreValue = $('#show-other-div input[type="text"]')
                    .val()
                    .trim();
                var manuscriptCompleted = $(
                    'input[name="data[Is your manuscript completed?]"]:checked'
                ).val();

                var pagesValue = $('#yesManuscript input[type="number"]').val().trim();

                // services
                const virtualSelectElements = $form.find(".lpService");
                const selectedServices = [];
                virtualSelectElements.each(function() {
                    if ($(this).attr("multiple")) {
                        const values = this.value;
                        if (values) {
                            selectedServices.push(...values);
                        }
                    } else {
                        selectedGenre = this.value;
                    }
                });

                $btn.html("Submitting...");
                $btn.attr("disabled", true);
                $.ajax({
                    url: "https://tm-brands.digitechtictest.com/api/leads",
                    method: "POST",
                    headers: {
                        Authorization: "{{ env('VITE_TOKEN') }}",
                        "Content-Type": "application/json",
                    },
                    data: JSON.stringify({
                        name: name,
                        email: email,
                        phone: phone,
                    }),
                    success: function(response) {
                        console.log(response);
                        if (selectedServices.length > 0) {
                            if (response.data && response.data.id) {
                                var lead_id = response.data.id;
                                // Genre
                                let finalGenre =
                                    selectedGenre === "Others" ?
                                    otherGenreValue :
                                    selectedGenre;
                                let leadDataArray = [];
                                leadDataArray.push({
                                    question: selectedGenre === "Others" ?
                                        "Other Genre" : "Genre",
                                    answer: finalGenre,
                                    lead_type: "text",
                                    lead_step: 1,
                                });

                                // Manuscript Completed
                                leadDataArray.push({
                                    question: `Is your manuscript completed?`,
                                    answer: manuscriptCompleted,
                                    lead_type: "text",
                                    lead_step: 1,
                                });

                                // If Yes, store pages
                                if (manuscriptCompleted === "Yes" && pagesValue) {
                                    leadDataArray.push({
                                        question: "Number of pages",
                                        answer: pagesValue,
                                        lead_type: "text",
                                        lead_step: 1,
                                    });
                                }

                                // Services
                                if (selectedServices.length > 0) {
                                    leadDataArray.push({
                                        question: "Services",
                                        answer: selectedServices.join(", "),
                                        lead_type: "text",
                                        lead_step: 1,
                                    });
                                }

                                var leadDataPayload = {
                                    lead_id: lead_id,
                                    lead_step: 1,
                                    data: leadDataArray,
                                };

                                $.ajax({
                                    url: "https://tm-brands.digitechtictest.com/api/leadData",
                                    method: "POST",
                                    headers: {
                                        Authorization: "{{ env('VITE_TOKEN') }}",
                                        "Content-Type": "application/json",
                                    },
                                    data: JSON.stringify(leadDataPayload),
                                    success: function(leadDataResponse) {
                                        const errorMsg =
                                            document.getElementById("errormsg");
                                        if (errorMsg.style.display == "block") {
                                            errorMsg.style.display = "none";
                                        }
                                        $btn.html("Submit");
                                        $btn.attr("disabled", false);

                                        window.location.href = `/thankyou`;
                                    },
                                    error: function(xhr, status, error) {
                                        const errorMsg =
                                            document.getElementById("errormsg");
                                        errorMsg.innerHTML =
                                            "Error submitting form!";
                                        errorMsg.style.display = "block";
                                        $btn.html("Submit");
                                        $btn.attr("disabled", false);
                                    },
                                });
                            } else {
                                const errorMsg = document.getElementById("errormsg");
                                errorMsg.innerHTML = "Email Already Exists!";
                                errorMsg.style.display = "block";
                                $btn.html("Submit");
                                $btn.attr("disabled", false);
                            }
                        } else {
                            $btn.html("Submit");
                            $btn.attr("disabled", false);

                            $form[0].submit();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        const errorMsg = document.getElementById("errormsg");
                        errorMsg.innerHTML = "Error submitting form!";
                        errorMsg.style.display = "block";
                        $btn.html("Submit");
                        $btn.attr("disabled", false);
                    },
                });
            });

            $(document).on("click", ".contactformsubmit", function(e) {
                e.preventDefault();
                var $form = $(this).closest("form");
                var $btn = $(this);
                var emailValid = validateEmail($form);
                var phoneValid = validatePhone($form);
                var dynamicValid = validateDynamicInputs($form);
                var isValid = emailValid && phoneValid && dynamicValid;
                if (!isValid) {
                    return;
                }

                var name = $form.find(".name").val();
                var email = $form.find(".email").val();
                var phone = $form.find(".phone").val();
                var message = $form.find(".message").val();

                $btn.html("Submitting...");
                $btn.attr("disabled", true);
                $.ajax({
                    url: "https://tm-brands.digitechtictest.com/api/leads",
                    method: "POST",
                    headers: {
                        Authorization: "{{ env('VITE_TOKEN') }}",
                        "Content-Type": "application/json",
                    },
                    data: JSON.stringify({
                        name: name,
                        email: email,
                        phone: phone,
                    }),
                    success: function(response) {
                        if (response.data && response.data.id) {
                            var lead_id = response.data.id;
                            var leadData = {
                                lead_id: lead_id,
                                lead_step: 1,
                                data: [{
                                    question: "Message",
                                    answer: message,
                                    lead_type: "text",
                                    lead_step: 1,
                                }, ],
                            };

                            $.ajax({
                                url: "https://tm-brands.digitechtictest.com/api/leadData",
                                method: "POST",
                                headers: {
                                    Authorization: "{{ env('VITE_TOKEN') }}",
                                    "Content-Type": "application/json",
                                },
                                data: JSON.stringify(leadData),
                                success: function(leadDataResponse) {
                                    const errorMsg =
                                        document.getElementById("errormsg");
                                    if (errorMsg.style.display == "block") {
                                        errorMsg.style.display = "none";
                                    }
                                    $btn.html("Submit");
                                    $btn.attr("disabled", false);
                                    window.location.href = `/thankyou`;
                                },
                                error: function(xhr, status, error) {
                                    const errorMsg =
                                        document.getElementById("errormsg");
                                    errorMsg.innerHTML = "Error submitting form!";

                                    errorMsg.style.display = "block";
                                    $(".contactformsubmit").removeAttr("disabled");
                                },
                            });
                        } else {
                            const errorMsg = document.getElementById("errormsg");
                            errorMsg.innerHTML = "Email Already Exists!";

                            errorMsg.style.display = "block";
                            $btn.html("Discuss your Requirements");
                            $btn.attr("disabled", false);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        const errorMsg = document.getElementById("errormsg");
                        errorMsg.innerHTML = "Error submitting form!";
                        errorMsg.style.display = "block";

                        $btn.html("Discuss your Requirements");
                        $btn.attr("disabled", false);
                    },
                });
            });
            $(document).on("click", ".leadformsubmit", function(e) {
                e.preventDefault();
                var $form = $(this).closest("form");
                var $btn = $(this);
                var emailValid = validateEmail($form);
                var phoneValid = validatePhone($form);
                var dynamicValid = validateDynamicInputs($form);
                var servicesValid = validateService($form);
                var checkboxValid = validateCheckbox($form);
                var isValid =
                    emailValid &&
                    phoneValid &&
                    dynamicValid &&
                    servicesValid &&
                    checkboxValid;
                if (!isValid) {
                    return;
                }

                var name = $form.find(".name").val();
                var email = $form.find(".email").val();
                var phone = $form.find(".phone").val();
                // services
                const virtualSelectElements = $form.find(".lpService");
                const selectedServices = [];
                virtualSelectElements.each(function() {
                    const selectedValues = this.value;
                    if (selectedValues) {
                        selectedServices.push(...selectedValues);
                    }
                });
                $btn.html("Submitting...");
                $btn.attr("disabled", true);
                $.ajax({
                    url: "https://tm-brands.digitechtictest.com/api/leads",
                    method: "POST",
                    headers: {
                        Authorization: "{{ env('VITE_TOKEN') }}",
                        "Content-Type": "application/json",
                    },
                    data: JSON.stringify({
                        name: name,
                        email: email,
                        phone: phone,
                    }),
                    success: function(response) {
                        if (selectedServices.length > 0) {
                            if (response.data && response.data.id) {
                                var lead_id = response.data.id;
                                var leadData = {
                                    lead_id: lead_id,
                                    lead_step: 1,
                                    data: [{
                                        question: "Services",
                                        answer: selectedServices.join(", "),
                                        lead_type: "text",
                                        lead_step: 1,
                                    }, ],
                                };

                                $.ajax({
                                    url: "https://tm-brands.digitechtictest.com/api/leadData",
                                    method: "POST",
                                    headers: {
                                        Authorization: "{{ env('VITE_TOKEN') }}",
                                        "Content-Type": "application/json",
                                    },
                                    data: JSON.stringify(leadData),
                                    success: function(leadDataResponse) {
                                        const errorMsg =
                                            document.getElementById("errormsg");
                                        if (errorMsg.style.display == "block") {
                                            errorMsg.style.display = "none";
                                        }
                                        $btn.html("Submit");
                                        $btn.attr("disabled", false);

                                        // $form[0].reset();
                                        // $form[0].submit();
                                        window.location.href = `/thankyou`;
                                    },
                                    error: function(xhr, status, error) {
                                        const errorMsg =
                                            document.getElementById("errormsg");
                                        errorMsg.innerHTML =
                                            "Error submitting form!";
                                        errorMsg.style.display = "block";
                                        $btn.html("Submit");
                                        $btn.attr("disabled", false);
                                    },
                                });
                            } else {
                                const errorMsg = document.getElementById("errormsg");
                                errorMsg.innerHTML = "Email Already Exists!";
                                errorMsg.style.display = "block";
                                $btn.html("Submit");
                                $btn.attr("disabled", false);
                            }
                        } else {
                            $btn.html("Submit");
                            $btn.attr("disabled", false);
                            window.location.href = `/thankyou`;
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        const errorMsg = document.getElementById("errormsg");
                        errorMsg.innerHTML = "Error submitting form!";
                        errorMsg.style.display = "block";

                        $btn.html("Discuss your Requirements");
                        $btn.attr("disabled", false);
                    },
                });
            });
            $(document).on("click", ".modalformsubmit", function(e) {
                e.preventDefault();
                var $form = $(this).closest("form");
                var $btn = $(this);
                var emailValid = validateEmail($form);
                var phoneValid = validatePhone($form);
                var dynamicValid = validateDynamicInputs($form);
                var servicesValid = validateService($form);
                var checkboxValid = validateCheckbox($form);
                var isValid =
                    emailValid &&
                    phoneValid &&
                    dynamicValid &&
                    servicesValid &&
                    checkboxValid;
                if (!isValid) {
                    return;
                }

                var name = $form.find(".name").val();
                var email = $form.find(".email").val();
                var phone = $form.find(".phone").val();
                // services
                const virtualSelectElements = $form.find(".lpService");
                const selectedServices = [];
                virtualSelectElements.each(function() {
                    const selectedValues = this.value;
                    if (selectedValues) {
                        selectedServices.push(...selectedValues);
                    }
                });
                $btn.html("Submitting...");
                $btn.attr("disabled", true);
                $.ajax({
                    url: "https://tm-brands.digitechtictest.com/api/leads",
                    method: "POST",
                    headers: {
                        Authorization: "{{ env('VITE_TOKEN') }}",
                        "Content-Type": "application/json",
                    },
                    data: JSON.stringify({
                        name: name,
                        email: email,
                        phone: phone,
                    }),
                    success: function(response) {
                        if (selectedServices.length > 0) {
                            if (response.data && response.data.id) {
                                var lead_id = response.data.id;
                                var leadData = {
                                    lead_id: lead_id,
                                    lead_step: 1,
                                    data: [{
                                        question: "Services",
                                        answer: selectedServices.join(", "),
                                        lead_type: "text",
                                        lead_step: 1,
                                    }, ],
                                };

                                $.ajax({
                                    url: "https://tm-brands.digitechtictest.com/api/leadData",
                                    method: "POST",
                                    headers: {
                                        Authorization: "{{ env('VITE_TOKEN') }}",
                                        "Content-Type": "application/json",
                                    },
                                    data: JSON.stringify(leadData),
                                    success: function(leadDataResponse) {
                                        const errorMsg =
                                            document.getElementById("errormsg");
                                        if (errorMsg.style.display == "block") {
                                            errorMsg.style.display = "none";
                                        }
                                        $btn.html("Submit");
                                        $btn.attr("disabled", false);

                                        // $form[0].reset();
                                        // $form[0].submit();
                                        window.location.href = `/thankyou`;
                                    },
                                    error: function(xhr, status, error) {
                                        const errorMsg =
                                            document.getElementById("errormsg");
                                        errorMsg.innerHTML =
                                            "Error submitting form!";
                                        errorMsg.style.display = "block";
                                        $btn.html("Submit");
                                        $btn.attr("disabled", false);
                                    },
                                });
                            } else {
                                const errorMsg = document.getElementById("errormsg");
                                errorMsg.innerHTML = "Email Already Exists!";
                                errorMsg.style.display = "block";
                                $btn.html("Submit");
                                $btn.attr("disabled", false);
                            }
                        } else {
                            $btn.html("Submit");
                            $btn.attr("disabled", false);
                            window.location.href = `/thankyou`;
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        const errorMsg = document.getElementById("errormsg");
                        errorMsg.innerHTML = "Error submitting form!";
                        errorMsg.style.display = "block";

                        $btn.html("Discuss your Requirements");
                        $btn.attr("disabled", false);
                    },
                });
            });

            // Modified submit handler
            var uploadedImageUrl = "";

            function validateFileUpload($form) {
                const $fileInput = $form.find(".fileupload");
                const $showImageName = $form.find(".show-image-name");
                const $fileLabel = $form.find("label[for='fileupload']");

                if (!uploadedImageUrl) {
                    $fileLabel.addClass("form-error");
                    $showImageName
                        .addClass("text-danger")
                        .text("File upload is required");
                    return false;
                } else {
                    $fileLabel.removeClass("form-error");
                    return true;
                }
            }

            function handleFileUpload(fileInput) {
                return new Promise(async (resolve, reject) => {
                    const file = fileInput.files[0];

                    if (!file) {
                        resolve(null);
                        return;
                    }

                    const allowedTypes = [
                        // Documents
                        "application/pdf",
                        "application/msword",
                        "application/vnd.openxmlformats-officedocument.wordprocessingml.document", // .docx
                        "application/vnd.ms-excel",
                        "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", // .xlsx
                        "application/vnd.ms-powerpoint",
                        "application/vnd.openxmlformats-officedocument.presentationml.presentation", // .pptx
                        "text/plain",
                        "text/csv",
                    ];

                    if (!allowedTypes.includes(file.type)) {
                        alert("Please upload a valid file type");
                        reject("Invalid file type");
                        return;
                    }

                    const maxSize = 10 * 1024 * 1024; // 5MB
                    if (file.size > maxSize) {
                        alert("File size exceeds 5 MB. Please upload a smaller file.");
                        reject("File size too large");
                        return;
                    }

                    try {
                        const formData = new FormData();
                        formData.append("image", file);

                        const uploadResponse = await $.ajax({
                            url: "https://tm-brands.digitechtictest.com/api/uploadImage",
                            method: "POST",
                            headers: {
                                Authorization: "{{ env('VITE_TOKEN') }}",
                            },
                            data: formData,
                            processData: false,
                            contentType: false,
                        });

                        console.log("Upload Response:", uploadResponse);

                        if (uploadResponse && uploadResponse.image_url) {
                            uploadedImageUrl = uploadResponse.image_url;
                            resolve({
                                fileName: file.name,
                                imageUrl: uploadResponse.image_url,
                            });
                        } else {
                            resolve(null);
                        }
                    } catch (error) {
                        console.error("Upload Error:", error);
                        reject(error);
                    }
                });
            }

            // File change event handler
            $(document).on("change", ".fileupload", async function(e) {
                const fileInput = this;
                const $form = $(this).closest("form");
                const $fileLabel = $form.find("label[for='fileupload']");
                const $showImageName = $form.find(".show-image-name");

                try {
                    const originalLabelHTML = $fileLabel.html();

                    $fileLabel.html(`
            <span>Uploading</span>
            <div class="spinner-border spinner-border-sm text-light ms-1" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        `);

                    const uploadResult = await handleFileUpload(fileInput);

                    if (uploadResult) {
                        $showImageName.text(uploadResult.fileName);
                        $showImageName
                            .addClass("text-success")
                            .removeClass("text-danger");

                        $fileLabel.removeClass("form-error");

                        console.log("File uploaded successfully:", uploadResult);
                    }

                    $fileLabel.html("Browse");
                } catch (error) {
                    $showImageName.text("Upload Your ManuScript");
                    $showImageName.removeClass("text-success");
                    $fileLabel.html("Browse");
                    console.error("File upload failed:", error);
                }
            });

            $(document).on("click", ".contact-form-submit-with-file", function(e) {
                e.preventDefault();
                var $form = $(this).closest("form");
                var $btn = $(this);

                var emailValid = validateEmail($form);
                var phoneValid = validatePhone($form);
                var dynamicValid = validateDynamicInputs($form);
                var fileValid = validateFileUpload($form);

                var isValid = emailValid && phoneValid && dynamicValid && fileValid;

                if (!isValid) {
                    return;
                }

                var name = $form.find(".name").val();
                var email = $form.find(".email").val();
                var phone = $form.find(".phone").val();
                var message = $form.find(".message").val();

                $btn.html("Submitting...");
                $btn.attr("disabled", true);

                $.ajax({
                    url: "https://tm-brands.digitechtictest.com/api/leads",
                    method: "POST",
                    headers: {
                        Authorization: "{{ env('VITE_TOKEN') }}",
                        "Content-Type": "application/json",
                    },
                    data: JSON.stringify({
                        name: name,
                        email: email,
                        phone: phone,
                    }),
                    success: function(response) {
                        if (response.data && response.data.id) {
                            var lead_id = response.data.id;

                            // Prepare lead data array
                            var leadDataArray = [{
                                question: "Message",
                                answer: message,
                                lead_type: "text",
                                lead_step: 1,
                            }, ];

                            leadDataArray.push({
                                question: "Uploaded File",
                                answer: uploadedImageUrl,
                                lead_type: "doc",
                                lead_step: 1,
                            });

                            var leadData = {
                                lead_id: lead_id,
                                lead_step: 1,
                                data: leadDataArray,
                            };

                            // Submit lead data
                            $.ajax({
                                url: "https://tm-brands.digitechtictest.com/api/leadData",
                                method: "POST",
                                headers: {
                                    Authorization: "{{ env('VITE_TOKEN') }}",
                                    "Content-Type": "application/json",
                                },
                                data: JSON.stringify(leadData),
                                success: function(leadDataResponse) {
                                    console.log(
                                        "Lead Data Response:",
                                        leadDataResponse
                                    );

                                    const errorMsg =
                                        document.getElementById("errormsg");
                                    if (errorMsg && errorMsg.style.display ==
                                        "block") {
                                        errorMsg.style.display = "none";
                                    }

                                    // Reset form and image URL
                                    uploadedImageUrl = "";
                                    $form[0].reset();

                                    $btn.html("Submit");
                                    $btn.attr("disabled", false);
                                    window.location.href = `/thankyou`;
                                },
                                error: function(xhr, status, error) {
                                    console.error("Lead Data Error:", xhr
                                        .responseJSON);
                                    const errorMsg =
                                        document.getElementById("errormsg");
                                    if (errorMsg) {
                                        errorMsg.innerHTML =
                                            "Error submitting form!";
                                        errorMsg.style.display = "block";
                                    }
                                    $btn.html("Submit");
                                    $btn.attr("disabled", false);
                                },
                            });
                        } else {
                            const errorMsg = document.getElementById("errormsg");
                            if (errorMsg) {
                                errorMsg.innerHTML = "Email Already Exists!";
                                errorMsg.style.display = "block";
                            }
                            $btn.html("Submit");
                            $btn.attr("disabled", false);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        const errorMsg = document.getElementById("errormsg");
                        if (errorMsg) {
                            errorMsg.innerHTML = "Error submitting form!";
                            errorMsg.style.display = "block";
                        }
                        $btn.html("Submit");
                        $btn.attr("disabled", false);
                    },
                });
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
