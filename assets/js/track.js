function formatDate(date) {
    // var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var day = date.getDate();
    var monthIndex = date.getMonth();
    var year = date.getFullYear();
    return day + "/" + (monthIndex + 1) + "/" + year;
  }
  
  $(document).ready(function ($) {
    $(".track-result").hide();
    var currentURL = window.location.href;
    var url = new URL(currentURL);
    var tracking_no = url.searchParams.get("tracking_no");
    var search_by = url.searchParams.get("searchSelected");
    // var search_by = 1;
    if (search_by == 1) {
      var searchtype = "tracking_no";
    } else if (search_by == 6) {
      var searchtype = "forwarding_no1";
    } else if (search_by == 2) {
      var searchtype = "reference_no";
    } else {
      search_by = 1;
      var searchtype = "tracking_no";
    }
    if (tracking_no) {
      tracking_no = tracking_no.trim();
      tracking_no = tracking_no.split(" ").join(",");
      var tracking_no_array = tracking_no.split(",");
      if (!tracking_no_array) {
        tracking_no_array = tracking_no.split(" ");
      }
    }
    $("#tracking_no").val(tracking_no_array);
    if (tracking_no) {
      $(".track-result").show("slow", () => {
        $(".track-result").get(0).scrollIntoView();
      });
      if (tracking_no_array.length > 10) {
        alert("Up to 10 tracking numbers are allowed at a time");
        $(".tracking-data").html("");
        return false;
      }
    } else {
      return false;
    }
    $.getJSON(
      "https://admin.llfreight.com/api/tracking_api/get_tracking_data?" +
        searchtype +
        "=" +
        tracking_no +
        "&customer_code=superadmin&company=logic-courier&api_company_id=22",
      function (data) {
        $(".tracking-data").html("");
        if (data && data.length) {
          $.each(data, function (_index, docket) {
            var lbl_no =
              search_by == 1
                ? "AWB: " + docket.tracking_no
                : search_by == 2
                ? "Reference: " + docket.reference_no
                : search_by == 3
                ? "Order: " + docket.order_no
                : search_by == 4
                ? "Eway Bill: " + docket.eway_bill_no
                : search_by == 5
                ? "Invoice: " + docket.invoice_no
                : search_by == 6
                ? "Forwarding : " + docket.forwarding_no
                : "Forwarding 2: " + docket.forwarding_no2;
            if (docket.docket_info) {
              if (docket.docket_info.length) {
                if (_index == 0) {
                  var is_active = 1;
                } else {
                  var is_active = 0;
                }
                var tr_toappend =
                  '<div class="accordion-header  ' +
                  (is_active == 1 ? "active" : "") +
                  '">' +
                  "<h2>" +
                  lbl_no +
                  "</h2>" +
                  "<h2>Status: " +
                  docket.docket_info[4][1] +
                  "</h2>" +
                  '<span class="accordion-toggle"><i class="bx ' +
                  (is_active == 1 ? "icofont-minus" : "icofont-plus") +
                  ' fa_icon"></i></span>' +
                  "</div>" +
                  '<div class="accordion-body  ' +
                  (is_active == 1 ? "active" : "") +
                  '">' +
                  '<h3 class="text-center">' +
                  lbl_no +
                  "</h3>" +
                  '<div class="tracking-info">' +
                  '<div class="row">' +
                  '<div class="col-lg-4 col-md-4 col-sm-12">' +
                  '<div class="table-responsive">' +
                  '<table class="table table-bordered">' +
                  "<thead>" +
                  "<tr>" +
                  '<th colspan="2">Tracking Information</th>' +
                  "</tr>" +
                  "</thead>" +
                  "<tbody>" +
                  "<tr>" +
                  '<th class="w-50">AWB No.</th>' +
                  '<td class="w-50">' +
                  docket.docket_info[0][1] +
                  "</td>" +
                  "</tr>" +
                  "<tr>" +
                  "<th>Booking Date</th>" +
                  "<td>" +
                  formatDate(new Date(docket.docket_info[1][1])) +
                  "</td>" +
                  "</tr>" +
                  "<tr>" +
                  "<th>Consignee Name</th>" +
                  "<td>" +
                  docket.docket_info[2][1] +
                  "</td>" +
                  "</tr>" +
                  "<tr>" +
                  "<th>Destination</th>" +
                  "<td>" +
                  docket.docket_info[3][1] +
                  "</td>" +
                  "</tr>" +
                  "<tr>" +
                  "<th>No. of Pieces</th>" +
                  "<td>" +
                  (docket.pcs ? docket.pcs : "") +
                  "</td>" +
                  "</tr>" +
                  "<tr>" +
                  "<th>Status</th>" +
                  "<td>" +
                  docket.docket_info[4][1] +
                  "</td>" +
                  "</tr>" +
                  "<tr>" +
                  "<th>Delivery Date</th>" +
                  "<td>" +
                  (isNaN(new Date(docket.docket_info[5][1])) ||
                  new Date(docket.docket_info[5][1]) == "undefined"
                    ? " "
                    : formatDate(new Date(docket.docket_info[5][1]))) +
                  "</td>" +
                  "</tr>" +
                  "<tr>" +
                  "<th>Delivery Time</th>" +
                  "<td>" +
                  (docket.docket_info[5][1]
                    ? docket.docket_info[5][1].split(" ")[1]
                    : "") +
                  "</td>" +
                  "</tr>" +
                  "<tr>" +
                  "<th>Receiver Name</th>" +
                  "<td>" +
                  docket.docket_info[6][1] +
                  "</td>" +
                  "</tr>" +
                  "<tr>" +
                  "<th>Forwarding No.</th>" +
                  "<td>" +
                  (docket.forwarding_url
                    ? '<a href="' +
                      docket.forwarding_url +
                      '" target="_blank" style="color: black;font-weight: 600;"><u> ' +
                      docket.forwarding_no +
                      "</u></a>"
                    : "" + docket.forwarding_no + "") +
                  "</td>" +
                  "</tr>" +
                  "</tbody>" +
                  "</table>" +
                  "</div>" +
                  "</div>";
              }
            }
            if (docket.docket_events) {
              if (docket.docket_events.length) {
                tr_toappend +=
                  '<div class="col-lg-8 col-md-8 col-sm-12">' +
                  '<div class="table-responsive">' +
                  '<table class="table table-bordered mb-0">' +
                  "<thead>" +
                  "<tr>" +
                  "<th>Date</th>" +
                  "<th>Time</th>" +
                  "<th>Location</th>" +
                  "<th>Activity</th>" +
                  "<th>Remarks</th>" +
                  "</tr>" +
                  "</thead>" +
                  "<tbody>";
                $.each(docket.docket_events, function (index, value) {
                  tr_toappend +=
                    "<tr>" +
                    "<td>" +
                    (value.event_at
                      ? formatDate(new Date(value.event_at))
                      : " ") +
                    "</td>" +
                    "<td>" +
                    (value.event_at
                      ? value.event_at.split(" ")[1].slice(0, 5)
                      : " ") +
                    "</td>" +
                    "<td>" +
                    value.event_location +
                    "</td>" +
                    "<td>" +
                    value.event_description +
                    "</td>" +
                    "<td>" +
                    (value.event_remark ? value.event_remark : "") +
                    "</td>" +
                    "</tr>";
                });
                tr_toappend +=
                  "</tbody>" +
                  "</table>" +
                  "</div>" +
                  "</div>" +
                  "</div>" +
                  "</div>";
  
                if (tr_toappend) {
                  $(".tracking-data").append(tr_toappend);
                }
              } else {
                $(".tracking-data").append(
                  '<div class="invalid-record"><h5>Invalid No.: ' +
                    docket.tracking_no +
                    "</h5></div>"
                );
              }
            }
          });
        }
        $(".accordion-header").click(function () {
          if ($(this).hasClass("active")) {
            $(".accordion-header").removeClass("active");
            $(".accordion-body").removeClass("active");
            $(this)
              .find(".fa_icon")
              .removeClass("icofont-minus")
              .addClass("icofont-plus");
          } else {
            $(".accordion-header").removeClass("active");
            $(".accordion-body").removeClass("active");
            $(this).addClass("active");
            $(this).next(".accordion-body").addClass("active");
            $(".fa_icon").removeClass("icofont-minus").addClass("icofont-plus");
            $(this)
              .find(".fa_icon")
              .addClass("icofont-minus")
              .removeClass("icofont-plus");
          }
        });
      }
    );
  });
