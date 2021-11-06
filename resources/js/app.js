import $ from "jquery";
import daterangepicker from "daterangepicker";
import moment from "moment";
import { Select2 } from "select2";

import 'datatables.net-bs5';

import 'bootstrap';

require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


$(document).ready(()=>{
    // date setups
    $('.daterange').daterangepicker({
        "showDropdowns": true,
        "autoApply": true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        "alwaysShowCalendars": true
    });

    $('.dateselector').daterangepicker({
        "singleDatePicker": true,
        "showDropdowns": true,
        "autoApply": true,
        "alwaysShowCalendars": true
    });
    //end date setups

    // select setups
    $('.select-single').select2({
        placeholder: 'Select an option'
      });

    $('.select-multiple').select2({
        placeholder: 'Select an option'
      });
    //end select setups

    // table setups
    $('.bootstrap-table').DataTable();
    // end table setups
});

