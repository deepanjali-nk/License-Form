<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/assets/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>License Form</title>
</head>
<body>
    <div class="logo">
        <img src="/build/assets/logo.png">
    </div>
    <div class="box1">
        <h1>Enter your personal details</h1>
        <p><b>(Please check and enter your details correctly. You will not be allowed to modify the details later.)</b></p>
    <div class="box2">
            <div class="A">
                <h3> A. Citizenship Details</h3>
                {{-- <x-guest-layout> --}}
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="group1">
                        <div class="mb-3 d-inline-block">
                            <label for="fn" class="form-label">First Name in English (pahilo name)</label>
                            <input type="text" class="form-control" id="fn" placeholder="📱 Dhan" required>
                        </div>
                        <div class="mb-3 d-inline-block">
                            <label for="mn" class="form-label">Middle Name in English (pahilo name)</label>
                            <input type="text" class="form-control" id="mn" placeholder="📱 Bahadur" required>
                        </div>
                        <div class="mb-3 d-inline-block">
                            <label for="ln" class="form-label">Last Name in English (pahilo name)</label>
                            <input type="text" class="form-control" id="ln" placeholder="📱 Gurung" required>
                        </div>
                    </div>
                    
                    <div class="group2">
                        <div class="mb-3 d-inline-block">
                            <label for="dob" class="form-label">Date of Birth (B.S.)</label>
                            <input type="text" class="form-control" id="dob" placeholder="📱" required>
                        </div>
                        <div class="mb-3 d-inline-block">
                            <label for="citizenship" class="form-label">Citizenship No. (Enter English Number)</label>
                            <input type="text" class="form-control" id="citizenship" placeholder="📱 351017" required>
                        </div>
                        <div class="mb-3 d-inline-block">
                            <label for="issuedDistrict" class="form-label">Issued District</label>
                            <div class="mb-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">Zonal</label>
                                <input class="form-check-input ms-2" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label ms-2" for="flexRadioDefault2">Provincial</label>
                            </div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">Bagmati</option>
                                <option value="2">Gandaki</option>
                                <option value="3">..</option>
                            </select>
                        </div>    
                    </div>
                    <div class="group3">
                        <div class="mb-3 d-inline-block ">
                            <label for="issuedDate" class="form-label">Issued Date</label>
                            <input type="date" class="form-control" id="issuedDate" required>
                        </div>
                        <div class="mb-3 d-inline-block ">
                            <label for="exampleInputEmail1" class="form-label">Email  </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder ="📱 Email Address">
                            
                    </div>
                </form>
            </div>  
            <div class="B mt-5">
                <h3>B. Applicant Details</h3>
                <div class="group4">
                    <div class="mb-3 d-inline-block mt-2 ">
                        <label for="fn" class="form-label">नाम (देवनागरिक मा)</label>
                        <input type="text" class="form-control" id="fn" placeholder="📱 दीपश्री" required>
                    </div>
                    <div class="mb-3 d-inline-block mt-2">
                        <label for="mn" class="form-label">बिचको नाम</label>
                        <input type="text" class="form-control" id="mn" placeholder="📱 लाल" required>
                    </div>
                    <div class="mb-3 d-inline-block mt-2">
                        <label for="ln" class="form-label">थर</label>
                        <input type="text" class="form-control" id="ln" placeholder="📱 श्रेष्ठ" required>
                    </div>
                </div>
                <div class="group5">
                    <div class="mb-3 d-inline-block  mt-2 ">
                        <label for="fn" class="form-label">Gender (लिङ्ग)</label>
                       
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Gender (लिङ्ग)</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            
                        </select>
                    </div>
                    <div class="mb-3 d-inline-block mt-2 ">
                        <label for="fn" class="form-label">Blood Group (रक्त समूह)</label>
                       
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Blood Group</option>
                            <option value="1">B+</option>
                            <option value="2">O+</option>
                            
                        </select>
                    </div>
                    <div class="mb-3 d-inline-block mt-2">
                        <label for="ln" class="form-label">Identity Mark (पहिचान चिन्ह)</label>
                        <input type="text" class="form-control" id="ln" placeholder="Identity Mark" >
                    </div>
                </div>
                <div class="group6">
                    <div class="mb-3 d-inline-block  mt-2 ">
                        <label for="fn" class="form-label">Profession (पेशा)</label>
                       
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select your current occupation</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            
                        </select>
                    </div>
                    <div class="mb-3 d-inline-block mt-2 ">
                        <label for="fn" class="form-label">Education (शिक्षा)</label>
                       
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select your latest educational degree</option>
                            <option value="1">B+</option>
                            <option value="2">O+</option>
                            
                        </select>
                    </div>
                    <div class="mb-3 d-inline-block mt-2">
                        <label for="ln" class="form-label">Training Institute (प्रशिक्षण संस्थान)</label>
                        <input type="text" class="form-control" id="ln" placeholder="Training Institute (प्रशिक्षण संस्थान)" >
                    </div>
                </div>
            </div> 
            <div class="C mt-5 ">
                <h3>C. Guardian/Witness Information</h3>
                <div class="group7">
                    <div class="mb-3 mt-2 ">
                        <label for="fn" class="form-label">Relationship</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select your relationship with guardian</option>
                            <option value="1">Father</option>
                            <option value="2">Mother</option>
                            
                        </select>
                    </div>
                    <div class="mb-3 d-inline-block mt-2">
                        <label for="mn" class="form-label">Guardian/Witness First Name (English) </label>
                        <input type="text" class="form-control" id="mn" placeholder="First Name" required>
                    </div>
                    <div class="mb-3 d-inline-block mt-2">
                        <label for="ln" class="form-label">Guardian/Witness Middle Name (English)</label>
                        <input type="text" class="form-control" id="ln" placeholder="Middle Name" required>
                    </div>
                    <div class="mb-3 d-inline-block mt-2">
                        <label for="ln" class="form-label">Guardian/Witness Last Name (English)</label>
                        <input type="text" class="form-control" id="ln" placeholder="Last Name" required>
                    </div>
            </div>

            </div>
            <div class="D mt-5 ">
                <h3>D. Permanent Address (स्थाई ठेगाना)</h3>
                <div class="group8">
                    <div class="mb-3 mt-2  ">
                        <label for="fn" class="form-label">Province (प्रदेश)</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select province</option>
                            <option value="1">Bagmati</option>
                            <option value="2">Mechi</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-2   ">
                        <label for="fn" class="form-label">District (जिल्ला)</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select District</option>
                            <option value="1">Kathmandu</option>
                            <option value="2">Dhangadi</option>
                        </select>
                    </div>
                </div>
                <div class="group8">
                    <div class="mb-3 mt-2 d-inline-block ">
                        <label for="fn" class="form-label">Rural/Urban Municipality</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Rural/ Urban Municipality</option>
                            <option value="1">Kathmandu</option>   
                        </select>
                    </div>
                    <div class="mb-3 mt-2 d-inline-block ">
                        <label for="fn" class="form-label">Ward No.</label>
                        <input type="text" class="form-control" id="ln" placeholder="Last Name" required>
                    </div>
                </div>
            </div>
            <div class="E mt-5 ">
                <h3>E. Citizenship Certificate (नागरिकता प्रमाणपत्र)</h3>
                <div class="mb-3 d-inline-block ">
                    <label for="formFile" class="form-label">Front Side of Citizenship</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3 d-inline-block ">
                    <label for="formFile" class="form-label">Back Side of Citizenship</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
    
                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <button type="button" class="btn btn-primary mt-5 ">Submit</button>
    </div>
</form>
{{-- </x-guest-layout> --}}
</body>
</html>

