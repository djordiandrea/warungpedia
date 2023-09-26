<div class="container mt-3">
   <h3>Add System</h3>
   <button class="btn btn-primary" id="addTable">Add Table</button>
   <button class="btn btn-secondary">Add Stuff</button>
</div>
<div class="container mt-4">
   <div class="col-md-12">
      <h3> All Table </h3>
      <table class="table" id="table-tb">
         <thead>
            <tr>
               <th scope="col">Table ID</th>
               <th scope="col">Table Name</th>
               <th scope="col">Table Capacity</th>
               <th scope="col">Table Total</th>
               <th scope="col">Table Create Date</th>
            </tr>
         </thead>
         <tbody>
            <?php for ($i = 0; $i < sizeof($dataMeja); $i++) { ?>
               <tr>
                  <td><?php echo $dataMeja[$i]['mstb_id'] ?></td>
                  <td><?php echo $dataMeja[$i]['mstb_tableName'] ?></td>
                  <td><?php echo $dataMeja[$i]['mstb_capacity'] ?></td>
                  <td><?php echo $dataMeja[$i]['mstb_totalTable'] ?></td>
                  <td><?php echo $dataMeja[$i]['mstb_createDate'] ?></td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
   <br>
   <div class="col-md-12">
      <h3> All Stuff </h3>
      <table class="table" id="stuff-table">
         <thead>
            <tr>
               <th scope="col">Stuff ID</th>
               <th scope="col">Stuff Code</th>
               <th scope="col">Stuff Name</th>
               <th scope="col">Stuff Total</th>
               <th scope="col">Stuff Create Date</th>
            </tr>
         </thead>
         <tbody>
            <?php for ($i = 0; $i < sizeof($dataBarang); $i++) { ?>
               <tr>
                  <td><?php echo $dataBarang[$i]['mstf_id'] ?></td>
                  <td><?php echo $dataBarang[$i]['mstf_stuffCode'] ?></td>
                  <td><?php echo $dataBarang[$i]['mstf_stuffName'] ?></td>
                  <td><?php echo $dataBarang[$i]['mstf_stuffTotal'] ?></td>
                  <td><?php echo $dataBarang[$i]['mstf_createDate'] ?></td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
</div>
<!-- nih gua bikin js nya di dalem home.php biar lu ga bingung -->
<!-- abis ini gua pulang dl yaa, baru nanti lanjut bentar sampe crud, seengganya lu ada bayangan -->
<script>
   var url = "/inputdata";

   $(document).ready(function() {
      $('#table-tb').DataTable();
      $('#stuff-table').DataTable();

      // tombol button add table, tujuannya bikin title nya berubah jadi add table, bodynya jd form, sama munculin modal 
      $('#addTable').click(function() {
         $('.modal-title').html('Add Table');
         $('.modal-body').load('form-table'); //form-table ini liat di routes ya, ini dari controller home, gua buat khusus buat load form
         $('#exampleModal').modal('show');
      });

      $("#save-data").click(function() {
         // alert("mana lu woy");
         // console.log($("#form-tableCode").val());
         var tableCode = $("#form-tableCode").val();
         var tableName = $("#form-tableName").val();
         var tableCapacity = $("#form-tableCapacity").val();
         var totalTable = $("#form-totalTable").val();

         var json = {
            tableCode: tableCode,
            tableName: tableName,
            tableCapacity: tableCapacity,
            totalTable: totalTable,
            type: 'add-table'
         }

         ajax.ajaxPost(url, json, function(response) {
            // console.log(response);
            if (response) {
               alert("Berhasil Input Data");
               window.location = base_url + '/';
            }
         });

      });

   });
</script>