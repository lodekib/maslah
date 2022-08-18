@extends('layouts.app')
@section('content')


    <div class="card">
        <div class="card-header">
            Upload Property
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-thumbs-up"></i></strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-exclamation-circle"></i></strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
          <form action={{ route('new.post') }} method="POST" enctype="multipart/form-data">
              <a href="/home"><i class="fas fa-arrow-circle-left me-2"></i><em>Home</em></a>
              @csrf
              <div class="row mt-5">
                              <div class="form-group col-md-4">
                                  <label for="property_name" class="text-secondary"><small>Property Name:</small></label>
                                  <input type="text" class="form-control @error('property_name') is-invalid @enderror" id="property_name" name="property_name" placeholder="--property name--" required>
                                  @error('property_name')
                                       <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                              <div class="form-group col-md-4">
                                  <label for="floor" class="text-secondary"><small>Floor</small></label>
                                  <select class="form-control @error('floor') is-invalid @enderror"  name="floor" required>
                                      <option value="">--floor--</option>
                                      <option value="First Floor">First Floor</option>
                                      <option value="Second Floor">Second Floor</option>
                                      <option value="Third Floor">Third Floor</option>
                                      <option value="Fourth Floor">Fourth Floor</option>
                                      <option value="Fifth Floor">Fifth Floor</option>
                                      <option value="Sixth Floor">Sixth Floor</option>
                                  </select>
                                  @error('floor')
                                 <small class="text-danger">{{ $message }}</small>
                                  @enderror

                              </div>
                              <div class="form-group col-md-4">
                                  <label for="price" class="text-secondary"><small>Price:</small></label>
                                  <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="--price--" required>
                                  @error('price')
                                <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                          </div>
                          <div class="row mt-4">
                              <div class="form-group col-md-4">
                                  <label for="bedrooms" class="text-secondary"><small>Bedrooms:</small></label>
                                  <input type="number" class="form-control @error('bedrooms') is-invalid @enderror" id="bedrooms" name="bedrooms" placeholder="--no of bedrooms--" required>
                                  @error('bedrooms')
                                <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                              <div class="form-group col-md-8">
                                  <label for="description" class="text-secondary"><small>Description</small></label>
                                  <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="1" placeholder="--Description--" required></textarea>
                                  @error('description')
                                  <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group mt-4">
                              <label for="aamenities" class="text-secondary"><small>Amenities</small></label>
                              <textarea type="text" class="form-control @error('amenities') is-invalid @enderror" id="amenities" name="amenities" placeholder="--amenities--" required></textarea>
                              @error('amenities')
                             <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                          <div class="row mt-4">
                              <div class="form-group col-md-4">
                                  <label for="size" class="text-secondary"><small>Size (Sq. ft)</small></label>
                                  <input type="number" class="form-control @error('size') is-invalid @enderror" id="size" name="size" placeholder="--size--" required>
                                  @error('size')
                                 <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                              <div class="form-group col-md-4">
                                  <label for="images" class="text-secondary"><small>Images</small></label>
                                  <input type="file" name="images[]" accept=".png,.jpg,.jpeg" class="form-control @error('images') is-invalid @enderror" multiple  required>
                                  @error('images')
                                  <small class="text-danger">{{ $message }}</small>
                                  @enderror

                              </div>
                              <div class="form-group col-md-4">
                                  <label for="discount" class="text-secondary"><small>Discount (%)</small></label>
                                  <input type="number" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount" required>
                                  @error('discount')
                                 <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                          </div>

                          <button type="submit" id="upload_btn" class="btn btn-dark mt-4">Upload Property</button>
          </form>
        </div>
    </div>
@endsection
