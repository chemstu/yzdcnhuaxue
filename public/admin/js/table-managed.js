var TableManaged = function () {

    return {

        //main function to initiate the module
        init: function () {
            
            if (!jQuery().dataTable) {
                return;
            }
            $('#datatable').dataTable({

                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "全部"]
                ],
                // set the initial value
                "iDisplayLength": 5,
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ 条记录（单页显示）",
                    "oPaginate": {
                        "sPrevious": "上一页",
                        "sNext": "下一页"
                    }
                },
                "aoColumnDefs": [{
                        'bSortable': false,
                        'aTargets': [0,-1] // 不参与排序的列
                    }
                ]
            });

            jQuery('#datatable .group-checkable').change(function () {
                var set = jQuery(this).attr("data-set");
                var checked = jQuery(this).is(":checked");
                jQuery(set).each(function () {
                    if (checked) {
                        $(this).attr("checked", true);
                    } else {
                        $(this).attr("checked", false);
                    }
                });
                jQuery.uniform.update(set);
            });


            jQuery('#datatable_wrapper .dataTables_filter input').addClass("m-wrap small"); // modify table search input
            jQuery('#datatable_wrapper .dataTables_length select').addClass("m-wrap small"); // modify table per page dropdown
            jQuery('#datatable_wrapper .dataTables_length select').select2(); // initialzie select2 dropdown

        }

    };

}();