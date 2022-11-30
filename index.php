
<?php
  include 'header.php';

?>
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <?php
      include 'navbar.php';
      ?>
      <div class="main-sidebar sidebar-style-2">
        <?php
        include 'sidebar.php';
        
        ?>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class = "card">
            <div class = "card-body">
            <h4>Header</h4>
             <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama Daerah</th>
                            <th>Keterangan</th>
                            <th width = "20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>no</td>
                            <td>Nama Daerah</td>
                            <td>Keterangan</td>
                            <td>
                              <button class = "btn btn-danger btn-sm" onclick="contoh()">Delete</button>
                              <a href="/NebengAja/Editable/DataDaerah.php" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr> 
                    </tbody>
                </table>
            </div>
           
          </div>

          <div class="section-body">
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <?php
    include 'footer.php';
  ?>

  <script>
    
$(document).ready(function () {
    $('#table_id').DataTable();
});

function contoh(){
            swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
        } else {
          swal("Your imaginary file is safe!");
        }
      });
        
    }
  </script>