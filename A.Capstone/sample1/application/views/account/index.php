<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-primary" href="<?php echo base_url('account/create/');?>"> 
            Create New Account
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
 
        <table class="table table-bordered" id='transactionsList'>
            <tr>
			
                <th>uname</th>
				        <th>pass</th>
				        <th>fname</th>
                <th>mname</th>
                <th>lname</th>
                
                <th width="240px">Action</th>
            </tr>
 
            <tbody></tbody> 
           
            
        </table>
             <!-- Paginate -->
             <div style="width: fit-content; margin: auto;" id='pagination2' >
        </div>




    </div>
</div>

<script type='text/javascript'>
   

   
   $(document).ready(function(){
       
       
     
       
 
     $('#pagination2').on('click','a',function(e){
       e.preventDefault(); 
       var pageno = $(this).attr('data-ci-pagination-page');
       loadPagination(pageno);
     });

     loadPagination(0);
 
     function loadPagination(pagno){
       $.ajax({
         url: 'account/loadRecord2/'+pagno,
         type: 'get',
         dataType: 'json',
         success: function(response){
            $('#pagination2').html(response.pagination);
            createTable(response.result,response.row);
         }
       });
     }
 
     function createTable(result,sno){
       sno = Number(sno);
       $('#transactionsList tbody').empty();
       for(index in result){
         var uname = result[index].uname;
          var pass = result[index].pass;
          var fname = result[index].fname;
          var mname = result[index].mname;
          var lname = result[index].lname;



          sno+=1;
          
          //var title = result[index].title;
          //var content = result[index].slug;
          //content = content.substr(0, 60) + " ...";
          //var link = result[index].slug;
          //sno+=1;
 
 
          var tr = "<tr>";
          tr += "<td>"+ uname +"</td>";
          tr += "<td>"+ pass +"</td>";
          tr += "<td>"+ fname +"</td>";
          tr += "<td>"+ mname +"</td>";
          tr += "<td>"+ lname +"</td>";
       
        
          
          
          
          //tr += "<td><a href='"+ link +"' target='_blank' >"+ title +"</a></td>";
          tr += "</tr>";
          $('#transactionsList tbody').append(tr);
  
        }
      }
       
       
       
       
    });
    </script>
