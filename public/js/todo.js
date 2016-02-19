"use strict";

function deleteItem(itemToDelete) {
	$.post("todo-json.php?id="+itemToDelete+"&action=delete",function(item){
	});
}

function completeItem(itemToComplete){
	$.post("todo-json.php?id="+itemToComplete+"&action=complete", function(item){
	});
}


$(document).ready(function() {	
	console.log("document is ready");

	$('body').on('click', '.btn-delete',function(){
		var row = this.closest("tr");
		$(row).fadeOut();
	});
	$('body').on('click', '.btn-complete',function(){
		var row = this.closest("tr");
		$(row).fadeOut();
	});


	$("#btn-new-item").click(function(event) {
		event.preventDefault();
		
		var content = $("#content").val();
		var priority = $("#priority").val();
		var dueDate = $("#due_date").val();
	
		var data = {
			"content": content,
			"priority": priority,
			"due_date": dueDate
		};
		
		if(content === "") {
			alert("Add plan.");
			return;
		} else if (priority === "") {
			alert('Enter "priority".');
			return;
		}
		$.post("todo-json.php", data, function(item) {
			console.log(item);
		});


	});	
	
	$("#btn-show-items").click(function(event) {
		event.preventDefault();

		$("#show-list").empty();

	
		$.get("todo-json.php?order_by=priority&direction=desc", function(items) {
		 	console.log(items);	
			items.forEach(function(element) {
				// Date item was created
				var todoCreatedDate = element.created_at;;
				todoCreatedDate = moment().format("YYYY MM DD");
				// Date item is due
				var todoDueDate = moment(element.due_date).format("YYYY MM DD");

				$("#show-list").append("<tr><td>" + element.content +
				 "</td><td>" + element.priority + "</td><td>" +
				  todoCreatedDate + "</td><td>" + todoDueDate + "</td><td>" +
				  "<button class='btn btn-warning btn-delete' onclick='deleteItem("+element.id+")'>Delete</button>"
				  + "</td><td>" + "<button class='btn btn-success btn-complete' onclick='deleteItem("+element.id+")'>Complete</button>" + "</td></tr>");
			}); 
		});
	});

	$("#btn-hide-list").click(function() {
		$("#show-list").hide();
	});

});

