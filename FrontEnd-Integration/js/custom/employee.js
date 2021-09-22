$(document).on('submit','#submitForm',function (e) {
    e.preventDefault();
    var submitData = serializeObject($(this));
    let addPostData = {
        age : submitData.age,
        start_date : submitData.start_date,
        name : submitData.name,
        office : submitData.office,
        position : submitData.position,
        salary : submitData.salary
    };
    let request = (new HttpRequest()).addRecord(addPostData).done(function(response) {
            if (response.status === true) {
                toastr.info(response.message, "info", toastOption);
                getEmployee();
                $("#close").click();
        }
    }).fail(function(response) {
        toastr.error(response.responseJSON.message, "Error", toastOption);
    });
});
$(document).on('submit','#updateForm',function (e) {
    e.preventDefault();
    var EditData = serializeObject($(this));
    let updatePostData = {
        id : EditData.id,
        age : EditData.age,
        start_date : EditData.start_date,
        name : EditData.name,
        office : EditData.office,
        position : EditData.position,
        salary : EditData.salary
    };
    let request = (new HttpRequest()).editRecord(updatePostData).done(function(response) {
        if (response.status === true) {
            toastr.info(response.message, "info", toastOption);
            getEmployee();
            $("#closeBtn").click();
        }
    }).fail(function(response) {
        toastr.error(response.responseJSON.message, "Error", toastOption);
        $("#close").click();
    });
});
$(document).on('submit','#editForm',function (e) {
    e.preventDefault();
    var editData = serializeObject($(this));
    let editPostData = {
        id : editData.id,
        age : editData.age,
        start_date : editData.start_date,
        name : editData.name,
        office : editData.office,
        position : editData.position,
        salary : editData.salary
    };
    let request = (new HttpRequest()).editRecord(editPostData).done(function(response) {
        if (response.status === true) {
            toastr.info(response.message, "info", toastOption);
            getEmployee();
            $("#close").click();
        }
    }).fail(function(response) {
        toastr.error(response.responseJSON.message, "Error", toastOption);
    });
});
$(document).ready(function(){
    getEmployee();
});

$("#show_entries").change(function (){
    postData.limit = $(this).val();
    getEmployee();
});
let PaginateData = {
    link_limit: 2,
    from: 2,
    to: 2,
    total: null,
    is_last: null,
    current_item_count: null,
    current_page: null,
    last_page: null,
};
let postData = {
    limit: 5,
    page_no: 1,
}
function getEmployee() {
    let request = (new HttpRequest()).getEmp(postData).done(function (response) {
        if(response.status === true && response.data.length !== 0) {
            PaginateData.total = response.data.total;
            PaginateData.is_last = response.data.is_last;
            PaginateData.current_item_count = response.data.current_item_count;
            PaginateData.current_page = response.data.current_page;
            PaginateData.last_page = response.data.last_page;

            let employee = response.data.data;
            console.log(employee)
             let empHtml = '';
            $.each(employee, function (key, val) {
                empHtml += `
                <tr>
                    <td>${val.id}</td>
                    <td>${val.name}</td>
                    <td>${val.position}</td>
                    <td>${val.office}</td>
                    <td>${val.age}</td>
                    <td>${val.start_date}</td>
                    <td>${val.salary}</td>
                    <td>                       
                        <svg onclick="editEmp(${val.id})" style="cursor: pointer; margin-right: 10px; color: #00c292;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                        <svg onclick="deleteEmp(${val.id})" style="cursor: pointer; color: #00c292;" xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">       <rect x="0" y="0" width="24" height="24"/>       <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>       <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>   </g></svg>                       
                    </td>                                                                              
                </tr>
                `;
            });

            $('#employeeData').html(empHtml);
            setPaginateButton();
        }else{
            $('#employeeData').html('<tr><td colspan="5" class="text-center">No data to display</td></tr>');
        }

    }).fail(function (response) {
        $('#employeeData').html('<tr><td colspan="100" class="text-center">No data to display</td></tr>');
    });
}
function HttpRequest() {
    this.getEmp = function(postData) {
        try {
            return $.ajax({
                url: 'http://127.0.0.1:8000/api/get/employee',
                method: 'post',
                data: postData,
            });
        } catch (err) {
            console.error(err);
        }
    };
    this.addRecord = function(postData) {
        try {
            return $.ajax({
                url: 'http://127.0.0.1:8000/api/add/employee',
                method: 'post',
                data: postData,
            });
        } catch (err) {
            console.error(err);
        }
    };
    this.getSingleEmp = function(postData) {
        try {
            return $.ajax({
                url: 'http://127.0.0.1:8000/api/get/single/employee',
                method: 'post',
                data: postData,
            });
        } catch (err) {
            console.error(err);
        }
    };
    this.editRecord = function(postData) {
        try {
            return $.ajax({
                url: 'http://127.0.0.1:8000/api/update/employee',
                method: 'post',
                data: postData,
            });
        } catch (err) {
            console.error(err);
        }
    };
    this.deleteRecord = function(postData) {
        try {
            return $.ajax({
                url: 'http://127.0.0.1:8000/api/delete/employee',
                method: 'post',
                data: postData,
            });
        } catch (err) {
            console.error(err);
        }
    };
}
function setPaginateButton() {
    let half_total_links = Math.floor(PaginateData.link_limit / 2);
    PaginateData.from = (PaginateData.current_page - half_total_links) < 1 ? 1 : PaginateData.current_page - half_total_links;
    PaginateData.to = (PaginateData.current_page + half_total_links) > PaginateData.last_page ? PaginateData.last_page : (PaginateData.current_page + half_total_links);
    if (PaginateData.from > PaginateData.last_page - PaginateData.link_limit) {
        PaginateData.from = (PaginateData.last_page - PaginateData.link_limit) + 1;
        PaginateData.to = PaginateData.last_page;
    }
    if (PaginateData.to <= PaginateData.link_limit) {
        PaginateData.from = 1;
        PaginateData.to = PaginateData.link_limit < PaginateData.last_page ? PaginateData.link_limit : PaginateData.last_page;
    }

    let paginateHtml = '';
    if(PaginateData.last_page > 1) {
        $("#data-table-basic_info").html(`<span class="d-none d-md-block" style="float: left;"> Showing ${((PaginateData.current_page - 1) * postData.limit) + 1 } to ${((PaginateData.current_page - 1) * postData.limit) + PaginateData.current_item_count}  of ${PaginateData.total}  entries</span>`);
        paginateHtml = `                  
            <div class="dataTables_paginate paging_simple_numbers" id="data-table-basic_paginate">                                                
                <span>  
                ${linkLimit()}    
                </span>                                                                 
            </div>          
        `;
    }
    $('#pagination').html(paginateHtml);
}
function linkLimit() {
    var html = '';
    var i;
    for(i = PaginateData.from; i <= PaginateData.to; i++){
        html += `<a class="paginate_button ${PaginateData.current_page === i ? 'current' : '' }" onclick="setPageNO(${i});" >${i}</a>`}
    return html;
}
function setPageNO(pageNO) {
    postData.page_no = postData.page_no = pageNO;
    getEmployee();
}
function editEmp(id){
    $("#editBtn").click();
    let request = (new HttpRequest()).getSingleEmp({id:id}).done(function (response) {
        if(response.status === true) {
            $("#id").val(id)
            $("#name").val(response.data.name)
            $("#position").val(response.data.position)
            $("#office").val(response.data.office)
            $("#age").val(response.data.age)
            $("#salary").val(response.data.salary)
            $("#start_date").val(response.data.start_date)
        }
    }).fail(function (response) {
        toastr.error(response.responseJSON.message, "Error", toastOption);
    });
}
function deleteEmp(id){
    if (confirm('Are you sure you want to delete Employee?')) {
        let request = (new HttpRequest()).deleteRecord({id:id}).done(function (response) {
            if(response.status === true) {
                getEmployee();
                toastr.info(response.message, "info", toastOption);
            }
        }).fail(function (response) {
            toastr.error(response.responseJSON.message, "Error", toastOption);
        });
    }
}
function blockUI(className){
    var $blockTarget = $('.'+className);
    $blockTarget.append('<div class="qt-block-ui"></div>');
}
function unBlockUI(className) {
    var $blockTarget = $('.'+className);
    var $block = $blockTarget.find(".qt-block-ui");
    $block.remove();
}
let serializeObject = function(data) {
    let o = {};
    let a = data.serializeArray();
    $.each(a, function() {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};
var toastOption = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "10000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
};