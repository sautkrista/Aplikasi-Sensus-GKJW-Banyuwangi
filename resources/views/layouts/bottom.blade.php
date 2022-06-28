{{-- CDN Datatable --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!-- Bootstrap datepicker JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
  $().ready(function() {
    $('#table').DataTable();
  });
</script>

<script>
  $(function() {
    $('.datetimepicker').datetimepicker();
  });
</script>
