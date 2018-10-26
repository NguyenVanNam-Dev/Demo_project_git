// lấy school_id
function show_selected_id(id)
{
	
	var selector = document.getElementById(id);
	var value = selector[selector.selectedIndex].value;
	
	return value;
}

function send_data()
{
	
	var academicyear_id = show_selected_id('academic');
	$.post("public/data1.php",
	{
		academicyear_id: academicyear_id

	},
	function (data)
	{
		
		document.getElementById("class_name").innerHTML =data;
	});

	// $.ajax({
 //        url : "public/data1.php", // gửi ajax đến file result.php
 //        type : "post", // chọn phương thức gửi là post
 //        dataType:"text", // dữ liệu trả về dạng text
 //        data : { // Danh sách các thuộc tính sẽ gửi đi
 //        	academicyear_id : academicyear_id
 //        },
 //        success : function (data){
 //            // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
 //            // đó vào thẻ div có id = result
 //            document.getElementById("class_name").innerHTML =data;
 //        }
 //    });
}
function send_id_class()
{
	var class_id = show_selected_id('class_name');
	alert(class_id);
	$.ajax({
		url : "controller/backend/controller_add_edit_student.php",
		type : "post",
		dataType : "text",
		data : {class_id : class_id}
	});
}