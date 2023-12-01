@extends('layouts.main')

@section('content')
<style>
.boxtr{
   box-sizing: border-box;
  /* do not use top and bottom */
  left:0;
  right:2px;
  height: 50px;
  box-shadow: 0 1px 9px 1px rgba(0, 0, 0, 0.28);
  -webkit-box-shadow: 0 1px 9px 1px rgba(0, 0, 0, 0.28);
}

.boxtr td{
  background-color:#eee;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
<main>


  <div class="whole-wrap">
    <div class="container box_1170">
      
      <div class="section-top-border">
      <div class="row">
            
            <div class="col-md-12">
                <div class="box box-primary">
                    
                 <div class="container"> 
                    <div class="row" >
                        <div class="col-md-12">                            
                                <h2>Fillter</h2>
                                <form  action="{{url('/')}}/warehouse">
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                    <label for="email">Category: </label>
                                    <select  class="form-control" name="category" id="category">
                                        <option value="">Select Category</option>
                                        @if($categories)
                                           @foreach($categories as $cat)
                                             <option value="{{$cat['id']}}"  <?php if(isset($_GET['category'])){ if($_GET['category']==$cat['id']){ echo 'selected'; }} ?>>{{$cat['name']}}</option>                                  
                                           @endforeach
                                        @endif
                                    </select>
                                    </div>
                                    <div class="form-group  col-md-3">
                                    <label for="pwd">Sub Category: </label>
                                    <select  class="form-control" name="sub_category" id="sub_category">
                                        <option value="">Select Sub Category</option>
                                    </select>
                                    </div>
                                    <div class="form-group  col-md-3">
                                    <label for="pwd">Child Category:</label>
                                    <select  class="form-control" name="child_category" id="child_category">
                                        <option value="">Select Child Category</option>
                                    </select>
                                    </div> 
                                    <div class="form-group  col-md-3">
                                    <button type="submit" style="margin-top: 28px; margin-right: 5px;float: left;" class="btn btn-success">Search</button> 
                                   
                                    <a href="{{url('/')}}/warehouse" style="margin-top: 28px;float: left;" class="btn btn-danger">Clear</a> 
                                    </div>         
                                    </div>                          
                                </form>
                        </div>
                    </div>         
                    <div class="row" >
                        <div class="col-md-12">
                            <table class="table table-bordered" id="customerTable2">
                              <thead>
                                <tr>
                                  <th scope="col">Image</th>
                                  <th  scope="col">Product Name</th>
                                  <th class="text-center" scope="col">Color</th>
                                  <th class="text-center" scope="col">Size</th>
                                  <th class="text-center" scope="col">MRP</th>
                                  <th class="text-center" scope="col">Your Price</th>
                                  <th></th>
                                  <th>Amount</th>
                                </tr>
                              </thead>
                              <!-- <i class="fa fa-toggle-down"></i> -->
                              <tbody>
                               
                              @if($data)
                                @foreach($data as $key => $products)    
                              
                                @if(count($products['item']) >1)

                                <tr  class="show_data " id="{{$products['id']}}">  
                                <td>                               
                                        @if($products['image'] != '')
                                        <img style="width:60px" src="https://www.sportsdrive.in/uploads/products/images/{{$products['id']}}/250x250/{{$products['image']}}" alt=""> 
                                        @else
                                        <img style="width:60px" src="https://png.pngtree.com/png-vector/20190820/ourmid/pngtree-no-image-vector-illustration-isolated-png-image_1694547.jpg" alt="">
                                          @endif
                                  </td>
                                  <td>
                                      <p>{{$products['name']}}</p>
                                  </td>
                                  <td  class="text-center">Color<br><i class="fa fa-toggle-down"></i> {{count($products['item'])}}</td>
                                 
                                  <td  class="text-center">Size<br><i class="fa fa-toggle-down"></i> {{count($products['item'])}}</td>
                                  <td  class="text-center">{{$products['price']}}</td>
                                  <td  class="text-center">{{$products['price']}}</td>
                                  <td  class="text-center"><i class="fa fa-toggle-down"></i></td>
                                  <td  class="text-center">{{$products['price']}}</td>
                                </tr> 
                                @else
                                <tr  class="">  
                                <td>                               
                                          @if($products['image'] != '')
                                          <img style="width:60px" src="https://www.sportsdrive.in/uploads/products/images/{{$products['id']}}/250x250/{{$products['image']}}" alt=""> 
                                          @else
                                          <img style="width:60px" src="https://png.pngtree.com/png-vector/20190820/ourmid/pngtree-no-image-vector-illustration-isolated-png-image_1694547.jpg" alt="">
                                          @endif
                                  </td>
                                  <td>
                                      <p>{{$products['name']}}</p>
                                  </td>
                                  @if(isset($products['item'][0]))
                                    <td  class="text-center">{{$products['item'][0]['attribute']['name']}}</td>
                                  @else
                                    <td  class="text-center"></td>                                   
                                  @endif
                                
                                  @if(isset($products['item'][0]))
                                    @if(isset($products['item'][0]['attributesize']))
                                    <td  class="text-center">{{$products['item'][0]['attributesize']['name']}}</td>
                                    @else
                                    <td  class="text-center"></td>
                                    @endif
                                  @else
                                    <td  class="text-center"></td>                                   
                                  @endif
                                  <td  class="text-center">{{$products['price']}}</td>
                                  <td  class="text-center">{{$products['price']}}</td>
                                  
                                  <td  class="text-center"><input type="number" min="0"  class="form-control"name="" id="" value="0"> </td>
                                  <td  class="text-center">{{$products['price']}}</td>
                                </tr>
                                @endif
                                

                                @if($products['item'])
                                  @foreach($products['item'] as $key2 => $item)    
                                      <tr class="showdata{{$products['id']}}" style="display:none">
                                          
                                             
                                            <td>
                                              @if($item['image'] != '')
                                                  <a href="javascript:void(0);" id="{{$item['barcode']}}" class="showimage"><img style="width:60px" src="https://www.sportsdrive.in/uploads/products/images/{{$item['product_id']}}/250x250/{{$item['image']}}" alt=""></a>
                                              @else
                                                  <img style="width:60px" src="https://png.pngtree.com/png-vector/20190820/ourmid/pngtree-no-image-vector-illustration-isolated-png-image_1694547.jpg" alt="">
                                              @endif
                                              </td>
                                                  <td>
                                                      <p>{{$products['name']}}</p>
                                                  </td>
                                                  <td style="text-center">
                                                      <p>{{$item['attribute']['name']}}</p>
                                                  </td>
                                                  <td style="text-center">
                                                      @if(isset($item['attributesize']))
                                                      <p>{{$item['attributesize']['name']}}</p>
                                                      @endif
                                                  </td>
                                                 
                                                  <td style="text-center">{{$item['price']}}</td>
                                                  
                                                  <td style="text-center">{{$item['price']}}</td>
                                                  <td  class="text-center"><input type="number" min="0"  class="form-control"name="" id="" value="0"> </td>
                                 
                                                  <td style="text-center">{{$item['price']}}</td>
                                              </tr>
                                  @endforeach    
                                @endif   



                                  @endforeach
                                @endif    
                              </tbody>
                            </table>
                           
                         </div>                    
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@push('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function () {

          $("#customerTable2").DataTable({
            'lengthMenu': [[50], [50]]
           
          });
            
        });
    </script>
    <script>
        $(function() {
            $('.accordion li').click(function(){
                $(this).toggleClass(' active ');
                $(this).siblings().removeClass(' active '); 
                $('.submenu').stop().slideUp();
                $('.active .submenu').stop().slideDown();
                return false;
            });

            $('#category').trigger('change');
        });

        $(document).on('click','.showimage',function(){
            var id = $(this).attr('id');
            $.ajax({
                url:"{{url('/')}}/showimage",
                type:'get',
                data:{id:id},
                success:function(res){
                $('#imgeshow').attr('src',res);
                $('#exampleModal').modal('show');
                }
            })
        })
       
        $(document).on('change','#category',function(){
            var id = $(this).val();
            $.ajax({
                url:"{{url('/')}}/fetch-sub-category-id2",
                type:'get',
                data:{id:id},
                success:function(res){
                     $('#sub_category').html(res);          
                     $('#sub_category').val("<?= $sub_cat ?>");                       
                     $('#sub_category').trigger('change');      
                }
            })
        })

        $(document).on('change','#sub_category',function(){
            var id = $(this).val();
            $.ajax({
                url:"{{url('/')}}/fetch-subchild-category-id",
                type:'get',
                data:{id:id},
                success:function(res){
                     $('#child_category').html(res);
                     $('#child_category').val("<?= $child_cat ?>"); 
                }
            })
        })

        $(document).on('click','.show_data',function(){
           var id = $(this).attr('id');
           $(this).toggleClass('boxtr');
           $('.showdata'+id).toggle();
        })

    </script>
    
@endpush