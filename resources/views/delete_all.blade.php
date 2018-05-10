@include('layout.head')
<body>

    @if(Session::get('note') != '' && Session::get('note_type') != '')
    <div class="alert alert-{{Session::get('note_type')}} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{Session::get('note_type')}}!</strong> {{Session::get('note')}}
    </div>
    @endif
    <style>
        
        input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; l
  margin: 0; 
}
    </style>
    

    <!--Start header-->
    <header class="fan-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <div class="header-logo float-left">
                            <a href="http://gofan.us"><img src="/images/GoFan_Logo-1.png" alt="header-logo" width="300px"/></a>
                        </div>
                       </div>
                </div>
            </div>
        </div>
    </header>
    
    
    <body>
        
        <button onclick="delete_all()"> Delete All </button>
        
    </body>
    <script
  src="//code.jquery.com/jquery-2.2.4.js"
  ></script>

<script>
    
    function delete_all(){
        
        var check = confirm("Are you sure , you want to delete ? ");
        
        if(check){
            
           
           $.ajax(
            {
                url: '/url/delete-all?_token={{ csrf_token() }}',
                type: "POST",
                
                success:function(data, textStatus, jqXHR)
                {
                   
                    alert(data);

                },
                error: function(jqXHR, textStatus, errorThrown){

                    console.log("Ajax Failed Error In Saving:" + textStatus);

                    alert("Error ! ");
                }
            });
           
        }
        
        
    }
    
    
</script>