@extends('user.singleUser.layouts.main')
@section('content')
<div
      class="container-fluid"
      style="background-color: rgba(255, 243, 247, 1)"
    >
      <header>
        <nav
          class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light"
        >
          <div class="container-fluid">
            <div>
              <span><i class="ri-search-line start_16_respons"></i></span>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0 profile_list">
                <li><a href="../Tagline.html">Businesses</a></li>
                <li><a href="#">Freelancers</a></li>
                <li><a href="#">Settings</a></li>
              </ul>
              <div>
                <span><i class="fa-regular fa-bell start_16_respons"></i></span>
                <span
                  ><i class="fa-regular fa-user ms-1 start_16_respons"></i
                ></span>
              </div>
            </div>
          </div>
        </nav>
      </header>
    </div>
    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
      <div class="row justify-content-center">
        <div
          class="col-lg-6 col-md-9 col-12 text-center justify-content-center"
        >
          <div class="row">
            <div class="col-12">
              <h1 class="headings">New Service</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-12 pt-2 pb-3">
              <p class="descriptions">
                Loremis iste natus error sit voluptatem accusantium doloremque
                laudantium, totam rem aperiam, eaque ipsa qua.
              </p>
            </div>
          </div>
          <form action="">
            <div class="row">
              <div class="col-12 mb-3">
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="Service Name"
                  style="background-color: #f4f4f4; border: none; padding: 10px"
                />
              </div>

              <div class="col-6">
                <div class="">
                  <select
                    required
                    style="
                      color: gray;
                      width: 100%;
                      padding: 13px;
                      border-radius: 8px;
                      border: none;
                      background-color: #f4f4f4;
                    "
                  >
                    <option value="" disabled selected hidden>Category</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div></div>
              </div>
              <div class="col-6">
                <input
                  class="rate-field form-control"
                  type="text"
                  placeholder="Rate"
                  style="
                    border: none;
                    background-color: #f4f4f4;
                    width: 100%;
                    padding: 14px 10px;
                    border-radius: 8px;
                  "
                />
              </div>
              <div class="form-group mt-3">
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  placeholder="Description"
                  rows="6"
                  style="background-color: #f4f4f4; border: none"
                ></textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection