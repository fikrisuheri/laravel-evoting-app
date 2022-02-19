<div class="row">
    <div class="col-12">
      <div class="card">
        {{ $header ?? '' }}
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>                                 
                {{ $head }}
              </thead>
              <tbody>                                 
                {{ $body }}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @push('css')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.css"/>    
  @endpush
  @push('js')
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
  <script src="{{ asset('adminasset') }}/js/page/modules-datatables.js"></script>
  @endpush