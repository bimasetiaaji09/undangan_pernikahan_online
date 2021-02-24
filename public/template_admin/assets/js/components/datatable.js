var table = $('#general_datatable').DataTable({
  processing: true,
  serverSide: true,
  ajax: url_datatable,
  columns: list_field
});

function format_child_row_transaction(d) {
  // `d` is the original data object for the row
  var html = `<table class="table table-bordered">
  <thead class="bg-light">
    <tr>
      <th class="text-center">Num</th>
      <th class="text-left">Product Code</th>
      <th class="text-left">Name</th>
      <th class="text-left">Qty</th>
      <th class="text-left">Price</th>
    </tr>
  </thead>
  <tbody>`
  for (let index = 0; index < d.length; index++) {
    html += '<tr>' +
      '<td class="border-none">' + (parseInt(index) + 1) + '</td>' +
      '<td class="text-left">' + d[index].itemorder_to_product.product_code + '</td>' +
      '<td class="text-left">' + d[index].itemorder_to_product.name + '</td>' +
      '<td class="text-left">' + d[index].qty + '</td>' +
      '<td class="text-left">' + d[index].itemorder_to_product.price + '</td>' +
      '</tr>';
  }
  html += '</tbody></table>'
  return html
}

// Add event listener for opening and closing details
$('#general_datatable tbody').on('click', 'td', function () {
  var tr = $(this).closest('tr');
  var row = table.row(tr);

  if (row.child.isShown()) {
    // This row is already open - close it
    row.child.hide();
    tr.removeClass('shown');
  }
  else {
    $.ajax({
      url: url_datatable_order,
      data: { trx_id: row.data().transaction_id },
      dataType: "JSON",
      success: function (data) {
        row.child(format_child_row_transaction(data)).show();
        tr.addClass('shown');
      }
    })
  }
});