<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="mt-4"> Form with Tabs </h6>
        <div class="nav-align-top mb-3">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" role="tab" aria-selected="false" tabindex="-1">Personal Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab" aria-selected="false" tabindex="-1">Account Details</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab" aria-selected="true">Social Links</button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade" id="form-tabs-personal" role="tabpanel">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-first-name">First Name</label>
                                <input type="text" id="formtabs-first-name" class="form-control" placeholder="John">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-last-name">Last Name</label>
                                <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-country">Country</label>
                                <div class="position-relative"><select id="formtabs-country" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="formtabs-country" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="11">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="10" style="width: 580px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-formtabs-country-container"><span class="select2-selection__rendered" id="select2-formtabs-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                            </div>
                            <div class="col-md-6 select2-primary">
                                <label class="form-label" for="formtabs-language">Language</label>
                                <div class="position-relative"><select id="formtabs-language" class="select2 form-select select2-hidden-accessible" multiple="" data-select2-id="formtabs-language" tabindex="-1" aria-hidden="true">
                                        <option value="en" selected="" data-select2-id="13">English</option>
                                        <option value="fr" selected="" data-select2-id="14">French</option>
                                        <option value="de">German</option>
                                        <option value="pt">Portuguese</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="12" style="width: 580px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="English" data-select2-id="15"><span class="select2-selection__choice__remove" role="presentation">×</span>English</li><li class="select2-selection__choice" title="French" data-select2-id="16"><span class="select2-selection__choice__remove" role="presentation">×</span>French</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-birthdate">Birth Date</label>
                                <input type="text" id="formtabs-birthdate" class="form-control dob-picker flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-phone">Phone No</label>
                                <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941">
                            </div>
                        </div>
                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-username">Username</label>
                                <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-email">Email</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="formtabs-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="formtabs-email2">
                                    <span class="input-group-text" id="formtabs-email2">@example.com</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="formtabs-password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="formtabs-password" class="form-control" placeholder="············" aria-describedby="formtabs-password2">
                                        <span class="input-group-text cursor-pointer" id="formtabs-password2"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="formtabs-confirm-password">Confirm Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="formtabs-confirm-password" class="form-control" placeholder="············" aria-describedby="formtabs-confirm-password2">
                                        <span class="input-group-text cursor-pointer" id="formtabs-confirm-password2"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade active show" id="form-tabs-social" role="tabpanel">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-twitter">Twitter</label>
                                <input type="text" id="formtabs-twitter" class="form-control" placeholder="https://twitter.com/abc">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-facebook">Facebook</label>
                                <input type="text" id="formtabs-facebook" class="form-control" placeholder="https://facebook.com/abc">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-google">Google+</label>
                                <input type="text" id="formtabs-google" class="form-control" placeholder="https://plus.google.com/abc">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-linkedin">Linkedin</label>
                                <input type="text" id="formtabs-linkedin" class="form-control" placeholder="https://linkedin.com/abc">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-instagram">Instagram</label>
                                <input type="text" id="formtabs-instagram" class="form-control" placeholder="https://instagram.com/abc">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-quora">Quora</label>
                                <input type="text" id="formtabs-quora" class="form-control" placeholder="https://quora.com/abc">
                            </div>
                        </div>
                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>






