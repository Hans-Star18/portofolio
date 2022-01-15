let base_url = "http://localhost/project_portofolio/portofolio_ci3/";

$(function () {
	$(".delete_button").on("click", function (e) {
		console.log(e);
		e.preventDefault();
		const href = $(this).attr("href");

		Swal.fire({
			title: "Are you sure?",
			text: "You won't be delete a project",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Delete",
		}).then((result) => {
			if (result.isConfirmed) {
				window.location = href;
			}
		});
	});
});

$(function () {
	$(".update_project").on("click", function (e) {
		// console.log(e.target.classList[3]);
		if (e.target.classList[3] == "image_update") {
			$(".title-modal").html("Edit Image");
			$(".button-sub").val("Update Image");
			$("#image").removeAttr("readonly", "");
			$("#image").attr("type", "file");
			$("#inputDescription").attr("readonly", "");
			$("#linkInput").attr("readonly", "");
			$(".button-sub").attr("name", "add");
		} else if (e.target.classList[3] == "description_update") {
			$("#image").attr("type", "text");
			$(".button-sub").removeAttr("name", "add");
			$(".button-sub").attr("name", "update");
			$(".title-modal").html("Edit Descripction");
			$(".button-sub").val("Update Descripction");
			$("#inputDescription").removeAttr("readonly", "");
			$("#image").attr("readonly", "");
			$("#linkInput").attr("readonly", "");
		} else if ((e.target.classList[3] = "link_update")) {
			$("#image").attr("type", "text");
			$(".button-sub").removeAttr("name", "add");
			$(".button-sub").attr("name", "update");
			$(".title-modal").html("Edit Link");
			$(".button-sub").val("Update Link");
			$("#linkInput").removeAttr("readonly", "");
			$("#inputDescription").attr("readonly", "");
			$("#image").attr("readonly", "");
		}
		$(".modal-body form").attr("action", `${base_url}project/update`);
		const id = $(this).data("id");
		console.log(id);

		$.ajax({
			url: `${base_url}project/getedit`,
			data: { id },
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#id").val(data.id);
				if (e.target.classList[3] == "image_update") {
					$("#image").val("");
				} else {
					$("#image").val(data.image);
				}
				$("#inputDescription").val(data.description);
				$("#linkInput").val(data.link);
				console.log(data.description);
			},
		});
	});
});

$(function () {
	$(".button-add").on("click", function () {
		$(".title-modal").html("ADD NEW PROJECT");
		$(".button-sub").val("Add New Project");
		$(".modal-body form").attr("action", `${base_url}project/add`);
		$("#id").val("");
		$("#image").val("");
		$("#inputDescription").val("");
		$("#linkInput").val("");
		$(".button-sub").removeAttr("name", "update");
		$(".button-sub").attr("name", "add");
		$("#inputDescription").removeAttr("readonly", "");
		$("#image").removeAttr("readonly", "");
		$("#linkInput").removeAttr("readonly", "");
		$("#image").attr("type", "file");
	});
});
