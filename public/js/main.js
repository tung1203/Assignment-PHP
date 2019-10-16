function checkDeleteUser(event, userId, isDel = false) {
    if (isDel) {
        return true;
    }
    var deleteModdel = document.querySelector('#deleteModdel');
    deleteModdel.querySelector('.modal-body').innerText = `Do you want to delete user ${userId}?`;
    btnDelete = deleteModdel.querySelector('.btnDelete');
    deleteModdel.querySelector('.deleteUserForm').action += `/admins/deleteuser/${userId}`;
    btnDelete.addEventListener('click', (event) => {
        checkDelete(event, userId, true);
    });
    event.preventDefault();
    return false;
}

function checkDeleteProduct(event, userId, isDel = false) {
    if (isDel) {
        return true;
    }
    var deleteModdel = document.querySelector('#deleteModdel');
    deleteModdel.querySelector('.modal-body').innerText = `Do you want to delete Product ${userId}?`;
    btnDelete = deleteModdel.querySelector('.btnDelete');
    deleteModdel.querySelector('.deleteUserForm').action += `/admins/deleteproduct/${userId}`;
    btnDelete.addEventListener('click', (event) => {
        checkDelete(event, userId, true);
    });
    event.preventDefault();
    return false;
}

// var sortPrice = document.querySelector('.sort-price');
// var state = true;
// sortPrice.addEventListener('click', (event) => {
//
//     // var state = event.target.href;
//     if (state) {
//
//         var xmlhttp = new XMLHttpRequest();
//         xmlhttp.onreadystatechange = function () {
//             if (this.readyState == 4 && this.status == 200) {
//                 console.log(JSON.parse(this.responseText));
//                 state = !state;
//             }
//         };
//         xmlhttp.open("POST", "1/price/desc", true);
//         xmlhttp.send();
//         // event.target.href = '?order=price&filter=desc';
//         // console.log(event.target.href);
//
//     } else {
//
//         var xmlhttp = new XMLHttpRequest();
//         xmlhttp.onreadystatechange = function () {
//             if (this.readyState == 4 && this.status == 200) {
//                 console.log(this.responseText);
//                 state = !state;
//             }
//         };
//         xmlhttp.open("POST", "1/price/asc", true);
//         xmlhttp.send();
//         // event.target.href = '?order=price&filter=asc';
//         // console.log(event.target.href);
//
//     }
//     event.preventDefault();
// });
// $(document).on('click', '.sort-price', function (e) {
//     e.preventDefault();
//     $.ajax({
//         url: "1/price/desc",
//         type: "post",
//         data: 'json',
//         success: function (response) {
//            return response;
//         },
//         error: function (jqXHR, textStatus, errorThrown) {
//             console.log(textStatus, errorThrown);
//         }
//     });
// });

