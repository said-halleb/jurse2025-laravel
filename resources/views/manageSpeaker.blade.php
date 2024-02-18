@extends('dashboardnav')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title"> Manage Home Speaker
        </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Speaker</li>
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
    
            <form action="{{ route('admin.addSpeaker') }}" method="post" enctype="multipart/form-data">
                @csrf
    
    
                <!-- Email Address -->
                <div class="">
                    <x-label for="firtname" :value="__('firstname')" />
    
                    <x-input type="text" class="form-control block mt-1 w-full"  name="firstname" :value="old('firstname')" required autofocus />
                  
                </div>
                <br><br>
                <div class="">
                    <x-label for="lastname" :value="__('lastname')" />
    
                    <x-input type="text" class="form-control block mt-1 w-full"  name="lastname" :value="old('lastname')" required autofocus />
                  
                </div>
                <br><br>
            
                <div class="">
                    <x-label for="description" :value="__('description')" />
    
                    <x-input type="textarea" class="form-control block mt-1 w-full"  name="description" :value="old('description')" required autofocus />
                  
                </div>
                <br><br>
            
                <div class="">
                    <x-label for="website" :value="__('website')" />
    
                    <x-input type="text" class="form-control block mt-1 w-full"  name="website" :value="old('website')" required autofocus />
                  
                </div>
                <br><br>
        
              
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
           <h2>Manage your Speakers Here</h2>
          @if($speakers->count() > 0)
        <table class="table table-hover table-bordered" style="background: white !important;">
            <thead>
                <tr>
                 
                    <td>Firstname</td>
                    <td>lastname</td>
                    
                    
                    <td>description</td>
                    <td>website</td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($speakers as $item)
                    <tr>
                        <td>{{ $item->firstname }} </td>
                        <td>{{ $item->lastname }} </td>
                        <td>{{ $item->description }}</td>

                        <td>{{ $item->website }}</td>
                        <td>
                            
                            <button type="submit">
                            <i class="fas fa-pencil-alt" style="color: rgb(235, 235, 66)"></i>
                            </button>
                       
                    </td>
                        <td>
                            <form action="{{ route('admin.deleteSpeaker', $item->id) }}" method="post" nctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-trash" style="color:red"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif 
    </div>
    
    
  
@endsection