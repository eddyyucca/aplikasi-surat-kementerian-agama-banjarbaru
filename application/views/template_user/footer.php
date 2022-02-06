   <!-- Footer -->
   <footer class="sticky-footer bg-white">
     <div class="container my-auto">
       <div class="copyright text-center my-auto">
         <span>Copyright &copy; ME</span>
       </div>
     </div>
   </footer>
   <!-- End of Footer -->

   </div>
   <!-- End of Content Wrapper -->

   </div>
   <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
   </a>

   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar ?</h5>
           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
         </div>
         <div class="modal-body">Klik Tombol Untuk Keluar</div>
         <div class="modal-footer">
           <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
           <a class="btn btn-primary" href="<?= base_url('auth/keluar') ?>">Keluar</a>
         </div>
       </div>
     </div>
   </div>


   <!-- Bootstrap core JavaScript-->
   <!-- databel -->
   <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Page level plugins -->
   <script src="<?= base_url('assets') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="<?= base_url('assets') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>


   <!-- Core plugin JavaScript-->
   <script src="<?= base_url('assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="<?= base_url('assets') ?>/js/sb-admin-2.min.js"></script>


   <!-- Page level custom scripts -->
   <script src="<?= base_url('assets') ?>/js/demo/datatables-demo.js"></script>
   <!-- Page level plugins -->
   <script src="<?= base_url('assets') ?>/vendor/chart.js/Chart.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="<?= base_url('assets') ?>/js/demo/chart-area-demo.js"></script>
   <script src="<?= base_url('assets') ?>/js/demo/chart-pie-demo.js"></script>
   <script src="<?= base_url('assets') ?>/js/qty.js"></script>
   <script>
     $(document).on("click", ".browse", function() {
       var file = $(this).parents().find(".file");
       file.trigger("click");
     });
     $('input[type="file"]').change(function(e) {
       var fileName = e.target.files[0].name;
       $("#file").val(fileName);

       var reader = new FileReader();
       reader.onload = function(e) {
         // get loaded data and render thumbnail.
         document.getElementById("preview").src = e.target.result;
       };
       // read the image file as a data URL.
       reader.readAsDataURL(this.files[0]);
     });
   </script>
   </body>

   </html>