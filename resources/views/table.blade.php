<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Form Wizard/</span> Numbered
        </h4>

        <!-- Default -->
        <div class="row">
            <div class="col-12">
                <h5>Default</h5>
            </div>

            <!-- Default Wizard -->
            <div class="col-12 mb-4">
                <small class="text-light fw-medium">Basic</small>
                <div class="bs-stepper wizard-numbered mt-2">
                    <div class="bs-stepper-header">
                        <div class="step crossed" data-target="#account-details">
                            <button type="button" class="step-trigger" aria-selected="false">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Account Details</span>
              <span class="bs-stepper-subtitle">Setup Account Details</span>
            </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                        <div class="step crossed" data-target="#personal-info">
                            <button type="button" class="step-trigger" aria-selected="false">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Personal Info</span>
              <span class="bs-stepper-subtitle">Add personal info</span>
            </span>

                            </button>
                        </div>
                        <div class="line">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                        <div class="step active" data-target="#social-links">
                            <button type="button" class="step-trigger" aria-selected="true">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Social Links</span>
              <span class="bs-stepper-subtitle">Add social links</span>
            </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form onsubmit="return false">
                            <!-- Account Details -->
                            <div id="account-details" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Account Details</h6>
                                    <small>Enter Your Account Details.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" id="username" class="form-control" placeholder="johndoe">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe">
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="············" aria-describedby="password2">
                                            <span class="input-group-text cursor-pointer" id="password2"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="confirm-password">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="confirm-password" class="form-control" placeholder="············" aria-describedby="confirm-password2">
                                            <span class="input-group-text cursor-pointer" id="confirm-password2"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" disabled="">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personal-info" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="first-name">First Name</label>
                                        <input type="text" id="first-name" class="form-control" placeholder="John">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="last-name">Last Name</label>
                                        <input type="text" id="last-name" class="form-control" placeholder="Doe">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="country">Country</label>
                                        <div class="position-relative"><div class="position-relative"><select class="select2 select2-hidden-accessible" id="country" tabindex="-1" aria-hidden="true" data-select2-id="country">
                                                    <option label=" " data-select2-id="18"></option>
                                                    <option>UK</option>
                                                    <option>USA</option>
                                                    <option>Spain</option>
                                                    <option>France</option>
                                                    <option>Italy</option>
                                                    <option>Australia</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="17" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-container"><span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="language">Language</label>
                                        <div class="dropdown bootstrap-select show-tick w-auto"><select class="selectpicker w-auto" id="language" data-style="btn-transparent" data-icon-base="bx" data-tick-icon="bx-check text-white" multiple="">
                                                <option>English</option>
                                                <option>French</option>
                                                <option>Spanish</option>
                                            </select><button type="button" tabindex="-1" class="btn dropdown-toggle bs-placeholder btn-transparent" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected" data-id="language"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Links -->
                            <div id="social-links" class="content active dstepper-block">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter">Twitter</label>
                                        <input type="text" id="twitter" class="form-control" placeholder="https://twitter.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="facebook">Facebook</label>
                                        <input type="text" id="facebook" class="form-control" placeholder="https://facebook.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google">Google+</label>
                                        <input type="text" id="google" class="form-control" placeholder="https://plus.google.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin">LinkedIn</label>
                                        <input type="text" id="linkedin" class="form-control" placeholder="https://linkedin.com/abc">
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Default Wizard -->

            <!-- Validation Wizard -->
            <div class="col-12 mb-4">
                <small class="text-light fw-medium">Validation</small>
                <div id="wizard-validation" class="bs-stepper mt-2 linear">
                    <div class="bs-stepper-header">
                        <div class="step active" data-target="#account-details-validation">
                            <button type="button" class="step-trigger" aria-selected="true">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Account Details</span>
              <span class="bs-stepper-subtitle">Setup Account Details</span>
            </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#personal-info-validation">
                            <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Personal Info</span>
              <span class="bs-stepper-subtitle">Add personal info</span>
            </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#social-links-validation">
                            <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Social Links</span>
              <span class="bs-stepper-subtitle">Add social links</span>
            </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form id="wizard-validation-form" onsubmit="return false">
                            <!-- Account Details -->
                            <div id="account-details-validation" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Account Details</h6>
                                    <small>Enter Your Account Details.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6 fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
                                        <label class="form-label" for="formValidationUsername">Username</label>
                                        <input type="text" name="formValidationUsername" id="formValidationUsername" class="form-control is-invalid" placeholder="johndoe">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"><div data-field="formValidationUsername" data-validator="notEmpty">The name is required</div></div></div>
                                    <div class="col-sm-6 fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
                                        <label class="form-label" for="formValidationEmail">Email</label>
                                        <input type="email" name="formValidationEmail" id="formValidationEmail" class="form-control is-invalid" placeholder="john.doe@email.com" aria-label="john.doe">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"><div data-field="formValidationEmail" data-validator="notEmpty">The Email is required</div></div></div>
                                    <div class="col-sm-6 form-password-toggle fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                        <label class="form-label" for="formValidationPass">Password</label>
                                        <div class="input-group input-group-merge has-validation">
                                            <input type="password" id="formValidationPass" name="formValidationPass" class="form-control" placeholder="············" aria-describedby="formValidationPass2">
                                            <span class="input-group-text cursor-pointer" id="formValidationPass2"><i class="bx bx-hide"></i></span>
                                        </div><div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
                                        <label class="form-label" for="formValidationConfirmPass">Confirm Password</label>
                                        <div class="input-group input-group-merge has-validation">
                                            <input type="password" id="formValidationConfirmPass" name="formValidationConfirmPass" class="form-control is-invalid" placeholder="············" aria-describedby="formValidationConfirmPass2">
                                            <span class="input-group-text cursor-pointer" id="formValidationConfirmPass2"><i class="bx bx-hide"></i></span>
                                        </div><div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"><div data-field="formValidationConfirmPass" data-validator="notEmpty">The Confirm Password is required</div><div data-field="formValidationConfirmPass" data-validator="identical">The password and its confirm are not the same</div></div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" disabled="">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personal-info-validation" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6 fv-plugins-icon-container">
                                        <label class="form-label" for="formValidationFirstName">First Name</label>
                                        <input type="text" id="formValidationFirstName" name="formValidationFirstName" class="form-control" placeholder="John">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <div class="col-sm-6 fv-plugins-icon-container">
                                        <label class="form-label" for="formValidationLastName">Last Name</label>
                                        <input type="text" id="formValidationLastName" name="formValidationLastName" class="form-control" placeholder="Doe">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <div class="col-sm-6 fv-plugins-icon-container">
                                        <label class="form-label" for="formValidationCountry">Country</label>
                                        <div class="position-relative"><div class="position-relative"><select class="select2 select2-hidden-accessible" id="formValidationCountry" name="formValidationCountry" tabindex="-1" aria-hidden="true" data-select2-id="formValidationCountry">
                                                    <option label=" " data-select2-id="27"></option>
                                                    <option>UK</option>
                                                    <option>USA</option>
                                                    <option>Spain</option>
                                                    <option>France</option>
                                                    <option>Italy</option>
                                                    <option>Australia</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="26" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-formValidationCountry-container"><span class="select2-selection__rendered" id="select2-formValidationCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <div class="col-sm-6 fv-plugins-icon-container">
                                        <label class="form-label" for="formValidationLanguage">Language</label>
                                        <div class="dropdown bootstrap-select show-tick w-auto"><select class="selectpicker w-auto" id="formValidationLanguage" data-style="btn-transparent" data-icon-base="bx" data-tick-icon="bx-check text-white" name="formValidationLanguage" multiple="">
                                                <option>English</option>
                                                <option>French</option>
                                                <option>Spanish</option>
                                            </select><button type="button" tabindex="-1" class="btn dropdown-toggle bs-placeholder btn-transparent" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected" data-id="formValidationLanguage"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Links -->
                            <div id="social-links-validation" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6 fv-plugins-icon-container">
                                        <label class="form-label" for="formValidationTwitter">Twitter</label>
                                        <input type="text" name="formValidationTwitter" id="formValidationTwitter" class="form-control" placeholder="https://twitter.com/abc">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <div class="col-sm-6 fv-plugins-icon-container">
                                        <label class="form-label" for="formValidationFacebook">Facebook</label>
                                        <input type="text" name="formValidationFacebook" id="formValidationFacebook" class="form-control" placeholder="https://facebook.com/abc">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <div class="col-sm-6 fv-plugins-icon-container">
                                        <label class="form-label" for="formValidationGoogle">Google+</label>
                                        <input type="text" name="formValidationGoogle" id="formValidationGoogle" class="form-control" placeholder="https://plus.google.com/abc">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <div class="col-sm-6 fv-plugins-icon-container">
                                        <label class="form-label" for="formValidationLinkedIn">LinkedIn</label>
                                        <input type="text" name="formValidationLinkedIn" id="formValidationLinkedIn" class="form-control" placeholder="https://linkedin.com/abc">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-next btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Validation Wizard -->

            <!-- Vertical Wizard -->
            <div class="col-12 mb-4">
                <small class="text-light fw-medium">Vertical</small>
                <div class="bs-stepper wizard-vertical vertical mt-2">
                    <div class="bs-stepper-header">
                        <div class="step crossed" data-target="#account-details-1">
                            <button type="button" class="step-trigger" aria-selected="false">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Account Details</span>
              <span class="bs-stepper-subtitle">Setup Account Details</span>
            </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step crossed" data-target="#personal-info-1">
                            <button type="button" class="step-trigger" aria-selected="false">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Personal Info</span>
              <span class="bs-stepper-subtitle">Add personal info</span>
            </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step active" data-target="#social-links-1">
                            <button type="button" class="step-trigger" aria-selected="true">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Social Links</span>
              <span class="bs-stepper-subtitle">Add social links</span>
            </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form onsubmit="return false">
                            <!-- Account Details -->
                            <div id="account-details-1" class="content dstepper-block">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Account Details</h6>
                                    <small>Enter Your Account Details.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="username-vertical">Username</label>
                                        <input type="text" id="username-vertical" class="form-control" placeholder="johndoe">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="email-vertical">Email</label>
                                        <input type="email" id="email-vertical" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe">
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="password-vertical">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password-vertical" class="form-control" placeholder="············" aria-describedby="password2-vertical">
                                            <span class="input-group-text cursor-pointer" id="password2-vertical"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="confirm-password-vertical">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="confirm-password-vertical" class="form-control" placeholder="············" aria-describedby="confirm-password-vertical2">
                                            <span class="input-group-text cursor-pointer" id="confirm-password-vertical2"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" disabled="">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personal-info-1" class="content dstepper-block">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="first-name-vertical">First Name</label>
                                        <input type="text" id="first-name-vertical" class="form-control" placeholder="John">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="last-name-vertical">Last Name</label>
                                        <input type="text" id="last-name-vertical" class="form-control" placeholder="Doe">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="country-vertical">Country</label>
                                        <div class="position-relative"><div class="position-relative"><select class="select2 select2-hidden-accessible" id="country-vertical" tabindex="-1" aria-hidden="true" data-select2-id="country-vertical">
                                                    <option label=" " data-select2-id="36"></option>
                                                    <option>UK</option>
                                                    <option>USA</option>
                                                    <option>Spain</option>
                                                    <option>France</option>
                                                    <option>Italy</option>
                                                    <option>Australia</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="35" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-vertical-container"><span class="select2-selection__rendered" id="select2-country-vertical-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="language-vertical">Language</label>
                                        <div class="dropdown bootstrap-select show-tick w-auto"><select class="selectpicker w-auto" id="language-vertical" data-style="btn-transparent" data-icon-base="bx" data-tick-icon="bx-check text-white" multiple="">
                                                <option>English</option>
                                                <option>French</option>
                                                <option>Spanish</option>
                                            </select><button type="button" tabindex="-1" class="btn dropdown-toggle bs-placeholder btn-transparent" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected" data-id="language-vertical"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Links -->
                            <div id="social-links-1" class="content active dstepper-block">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter-vertical">Twitter</label>
                                        <input type="text" id="twitter-vertical" class="form-control" placeholder="https://twitter.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="facebook-vertical">Facebook</label>
                                        <input type="text" id="facebook-vertical" class="form-control" placeholder="https://facebook.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google-vertical">Google+</label>
                                        <input type="text" id="google-vertical" class="form-control" placeholder="https://plus.google.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin-vertical">LinkedIn</label>
                                        <input type="text" id="linkedin-vertical" class="form-control" placeholder="https://linkedin.com/abc">
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Vertical Wizard -->
        </div>
        <hr class="container-m-nx mb-5">

        <!-- Modern -->
        <div class="row">
            <div class="col-12">
                <h5>Modern</h5>
            </div>

            <!-- Modern Wizard -->
            <div class="col-12 mb-4">
                <small class="text-light fw-medium mt-2">Basic</small>
                <div class="bs-stepper wizard-modern wizard-modern-example mt-2">
                    <div class="bs-stepper-header">
                        <div class="step active" data-target="#account-details-modern">
                            <button type="button" class="step-trigger" aria-selected="true">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Account Details</span>
              <span class="bs-stepper-subtitle">Setup Account Details</span>
            </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#personal-info-modern">
                            <button type="button" class="step-trigger" aria-selected="false">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Personal Info</span>
              <span class="bs-stepper-subtitle">Add personal info</span>
            </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#social-links-modern">
                            <button type="button" class="step-trigger" aria-selected="false">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Social Links</span>
              <span class="bs-stepper-subtitle">Add social links</span>
            </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form onsubmit="return false">
                            <!-- Account Details -->
                            <div id="account-details-modern" class="content active dstepper-block">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Account Details</h6>
                                    <small>Enter Your Account Details.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="username-modern">Username</label>
                                        <input type="text" id="username-modern" class="form-control" placeholder="johndoe">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="email-modern">Email</label>
                                        <input type="email" id="email-modern" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe">
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="password-modern">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password-modern" class="form-control" placeholder="············" aria-describedby="password2-modern">
                                            <span class="input-group-text cursor-pointer" id="password2-modern"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="confirm-password-modern">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="confirm-password-modern" class="form-control" placeholder="············" aria-describedby="confirm-password-modern2">
                                            <span class="input-group-text cursor-pointer" id="confirm-password-modern2"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" disabled="">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personal-info-modern" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="first-name-modern">First Name</label>
                                        <input type="text" id="first-name-modern" class="form-control" placeholder="John">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="last-name-modern">Last Name</label>
                                        <input type="text" id="last-name-modern" class="form-control" placeholder="Doe">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="country-modern">Country</label>
                                        <div class="position-relative"><div class="position-relative"><select class="select2 select2-hidden-accessible" id="country-modern" tabindex="-1" aria-hidden="true" data-select2-id="country-modern">
                                                    <option label=" " data-select2-id="45"></option>
                                                    <option>UK</option>
                                                    <option>USA</option>
                                                    <option>Spain</option>
                                                    <option>France</option>
                                                    <option>Italy</option>
                                                    <option>Australia</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="44" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-modern-container"><span class="select2-selection__rendered" id="select2-country-modern-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="language-modern">Language</label>
                                        <div class="dropdown bootstrap-select show-tick w-auto"><select class="selectpicker w-auto" id="language-modern" data-style="btn-transparent" data-icon-base="bx" data-tick-icon="bx-check text-white" multiple="">
                                                <option>English</option>
                                                <option>French</option>
                                                <option>Spanish</option>
                                            </select><button type="button" tabindex="-1" class="btn dropdown-toggle bs-placeholder btn-transparent" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected" data-id="language-modern"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-4" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Links -->
                            <div id="social-links-modern" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter-modern">Twitter</label>
                                        <input type="text" id="twitter-modern" class="form-control" placeholder="https://twitter.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="facebook-modern">Facebook</label>
                                        <input type="text" id="facebook-modern" class="form-control" placeholder="https://facebook.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google-modern">Google+</label>
                                        <input type="text" id="google-modern" class="form-control" placeholder="https://plus.google.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin-modern">LinkedIn</label>
                                        <input type="text" id="linkedin-modern" class="form-control" placeholder="https://linkedin.com/abc">
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Modern Wizard -->

            <!-- Modern Vertical Wizard -->
            <div class="col-12">
                <small class="text-light fw-medium">Vertical</small>
                <div class="bs-stepper vertical wizard-modern wizard-modern-vertical mt-2">
                    <div class="bs-stepper-header">
                        <div class="step active" data-target="#account-details-modern-vertical">
                            <button type="button" class="step-trigger" aria-selected="true">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Account Details</span>
              <span class="bs-stepper-subtitle">Setup Account Details</span>
            </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#personal-info-modern-vertical">
                            <button type="button" class="step-trigger" aria-selected="false">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Personal Info</span>
              <span class="bs-stepper-subtitle">Add personal info</span>
            </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#social-links-modern-vertical">
                            <button type="button" class="step-trigger" aria-selected="false">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Social Links</span>
              <span class="bs-stepper-subtitle">Add social links</span>
            </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form onsubmit="return false">
                            <!-- Account Details -->
                            <div id="account-details-modern-vertical" class="content active dstepper-block">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Account Details</h6>
                                    <small>Enter Your Account Details.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="username-modern-vertical">Username</label>
                                        <input type="text" id="username-modern-vertical" class="form-control" placeholder="johndoe">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="email-modern-vertical">Email</label>
                                        <input type="email" id="email-modern-vertical" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe">
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="password-modern-vertical">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password-modern-vertical" class="form-control" placeholder="············" aria-describedby="password2-modern-vertical">
                                            <span class="input-group-text cursor-pointer" id="password2-modern-vertical"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="confirm-password-modern-vertical">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="confirm-password-modern-vertical" class="form-control" placeholder="············" aria-describedby="confirm-password-modern-vertical2">
                                            <span class="input-group-text cursor-pointer" id="confirm-password-modern-vertical2"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" disabled="">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personal-info-modern-vertical" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="first-name-modern-vertical">First Name</label>
                                        <input type="text" id="first-name-modern-vertical" class="form-control" placeholder="John">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="last-name-modern-vertical">Last Name</label>
                                        <input type="text" id="last-name-modern-vertical" class="form-control" placeholder="Doe">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="country-modern-vertical">Country</label>
                                        <div class="position-relative"><div class="position-relative"><select class="select2 select2-hidden-accessible" id="country-modern-vertical" tabindex="-1" aria-hidden="true" data-select2-id="country-modern-vertical">
                                                    <option label=" " data-select2-id="54"></option>
                                                    <option>UK</option>
                                                    <option>USA</option>
                                                    <option>Spain</option>
                                                    <option>France</option>
                                                    <option>Italy</option>
                                                    <option>Australia</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="53" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-modern-vertical-container"><span class="select2-selection__rendered" id="select2-country-modern-vertical-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="language-modern-vertical">Language</label>
                                        <div class="dropdown bootstrap-select show-tick w-auto"><select class="selectpicker w-auto" id="language-modern-vertical" data-style="btn-transparent" data-icon-base="bx" data-tick-icon="bx-check text-white" multiple="">
                                                <option>English</option>
                                                <option>French</option>
                                                <option>Spanish</option>
                                            </select><button type="button" tabindex="-1" class="btn dropdown-toggle bs-placeholder btn-transparent" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected" data-id="language-modern-vertical"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-5" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Links -->
                            <div id="social-links-modern-vertical" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter-modern-vertical">Twitter</label>
                                        <input type="text" id="twitter-modern-vertical" class="form-control" placeholder="https://twitter.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="facebook-modern-vertical">Facebook</label>
                                        <input type="text" id="facebook-modern-vertical" class="form-control" placeholder="https://facebook.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google-modern-vertical">Google+</label>
                                        <input type="text" id="google-modern-vertical" class="form-control" placeholder="https://plus.google.com/abc">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin-modern-vertical">LinkedIn</label>
                                        <input type="text" id="linkedin-modern-vertical" class="form-control" placeholder="https://linkedin.com/abc">
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Modern Vertical Wizard -->
        </div>


    </div>
</x-layouts.app>
