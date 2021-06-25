@extends('layouts.app')

@section('content')
<div class="page page--policy bg-light-green bg-ornament bg-ornament--sm">
  <section class="cart pt-5">
  <div class="container">
    
      <div class="accordion" id="accordionExample">
        
            @foreach($faq as $key=>$row)
            <div class="card">    
            
            <div class="accordion-item">
              <div class="card-header">
              <h2 class="mb-0 accordion-header" id="heading{{ $row->id }}">
                <button class="btn btn-block text-left accordion-button bg-light {{ ($key==0)?"":"collapsed" }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $row->id }}"  aria-expanded="{{ ($key==0)?"true":"false" }}" aria-controls="collapseOne">
                  {{ $row->title }}
                </button>
              </h2>
              </div>

              <div id="collapse{{ $row->id }}" class="accordion-collapse collapse {{ ($key==0)?"show":"" }}" aria-labelledby="heading{{ $row->id }}" data-parent="#accordionExample">
                <div class="card-body">
                  {{ $row->content }}
                </div>
              </div>
            </div>

            
            </div> 
            @endforeach
        
      </div>

    </div>
  </section>
</div>
@endsection