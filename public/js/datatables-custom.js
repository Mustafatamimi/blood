
   $(document).ready(function()
   {     
            $('#dataTable').DataTable({
            "pageLength":4,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "aLengthMenu": [[5, 10, 15, 20, 25, 50, -1], [5, 10, 15, 20, 25, 50, "All"]],
            "language": 
             {
            "paginate": 
                 {
              "next": "التالي",
              "previous": "السابق",
                   }
             },
            "oLanguage":
             {  "search":"بحث :",
                "sLengthMenu": "عرض _MENU_ صف في كل صفحة",
                "sZeroRecords": "للأسف غير موجود",
                "sInfo": "عرض _START_ إلى _END_ من _TOTAL_ صف",
                "sInfoEmpty": "عرض 0 إلى 0",
                 "sInfoFiltered": "(تم البحث من _MAX_ صف)"
              }
            });
        });
