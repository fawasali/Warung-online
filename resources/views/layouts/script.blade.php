

<script>
     $('#modal-edit').on('show.bs.modal', function (event){
      var button = $(event.relatedTarget)
      var nama = button.data('mynama')
      var alamat = button.data('myalamat')
      var ttl = button.data('myttl')
      var dos_id= button.data('dos_id')

      var modal =$(this)
      modal.find('.modal-body #nama').val(nama);
      modal.find('.modal-body #alamat').val(alamat);
      modal.find('.modal-body #ttl').val(ttl);
      modal.find('.modal-body #dos_id').val(dos_id);
    })

    $('#modal-del').on('show.bs.modal', function (event){
      var button = $(event.relatedTarget)
      var nama = button.data('dos_id')
      

      var modal =$(this)
      modal.find('.modal-body #dos_id').val(dos_id);
      
    })
</script>