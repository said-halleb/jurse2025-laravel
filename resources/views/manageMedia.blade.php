@extends('dashboardnav')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">   Manage Home banner photos
        </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Banner</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

    {{-- Display a list of existing photos and videos --}}
    <div class="w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <x-slot name="logo">
                {{-- <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a> --}}
            </x-slot>
    
          
            <form action="{{ route('admin.addMedia') }}" method="post" enctype="multipart/form-data">
                @csrf
    
    
                <!-- Email Address -->
                <div class="">
                    <x-label for="photo" :value="__('photo')" />
    
                    <x-input type="file" class="form-control block mt-1 w-full" id="inputGroupFile02"  name="photo" :value="old('photo')" required autofocus />
                  
                </div>
                <br><br>
                @if($errors->media->has('photo'))
                <div class="alert alert-danger">
                    {{ $errors->media->first('photo') }}
                </div>
            @endif
            
                <!-- alt -->
                <div>
                    <x-label for="alt" :value="__('alt')" />
    
                    <x-input id="alt" class="block mt-1 w-full" type="text" name="alt" :value="old('alt')" required autofocus />
                  
                </div>
              
                    <br>
                <div class="flex items-center justify-end mt-4">
                   
    
                    <x-button class="ml-3">
                        {{ __('submit') }}
                    </x-button>
                </div>
            </form>
            </div>
    </div>
            <br><br>
            <h2>Manage your photos Here</h2>
          @if($photos->count() > 0)
        <table class="table table-hover table-bordered" style="background: white !important;">
            <thead>
                <tr>
                 
                    <td>Photos</td>
                    <td>Alt</td>
                    
                    
                    <td>Name</td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $item)
                    <tr>
                        <td>
                            <img src="{{ asset($item->vpath) }}" alt="{{ $item->alt }}" style="width: 200px; height: 150px;">
                            </td>
                        <td>{{ $item->alt }} </td>
                        <td>{{basename($item->vpath)}}</td>
                        <td><form action="{{ route('admin.updateMedia', $item->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <button type="submit"><i class="fas fa-pencil-alt" style="color: rgb(235, 235, 66)"></i>


                            </button>
                        </form></td>
                        <td>
                            <form action="{{ route('admin.deleteMedia', $item->id) }}" method="post" nctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-trash" style="color:red"></i>
                                </button>
                            </form></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    
    
  
@endsection