
@extends('layouts.visitor_home')
@section('title', 'Contact Us')
@section('content')
<div class="bd-contact-form wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                     <h3 class="bd-contact-form-title mb-25">Contact Us Right Here</h3>
                     <form action="#">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="name">Name <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="name" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="email">Email <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="email" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="phone">Phone <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="phone" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="subject">Subject <sup><i
                                          class="fa-solid fa-star-of-life"></i></sup></label>
                                 <select name="subject" id="subject" class="bd-nice-select">
                                    <option>Select Subject</option>
                                    <option>Junior KG</option>
                                    <option>Senior KG</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="bd-contact-input mb-20">
                                 <label for="textarea">Comments <sup><i
                                          class="fa-solid fa-star-of-life"></i></sup></label>
                                 <textarea name="textarea" id="textarea"></textarea>
                              </div>
                           </div>
                           <div class="col-md-12 mb-30">
                              <div class="bd-contact-agree d-flex align-items-center">
                                 <input class="" type="checkbox" id="check-agree">
                                 <label class="check-label" for="check-agree">Save Data for Next Comment</label>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="bd-contact-agree-btn">
                                 <button type="submit" class="bd-btn">
                                    <span class="bd-btn-inner">
                                       <span class="bd-btn-normal">Send
                                          now</span>
                                       <span class="bd-btn-hover">Send
                                          now</span>
                                    </span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>

 @endSection              