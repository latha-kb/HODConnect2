function selectStatus(status)
{
    document.getElementById("status").value=status;
}

function updateStatus()
{

    let status=document.getElementById("status").value;
    let remarks=document.getElementById("remarks").value;
    let expected=document.getElementById("expected").value;

    let formData=new FormData();

    formData.append("status",status);
    formData.append("remarks",remarks);
    formData.append("expected_time",expected);

    fetch("save_status.php",{

        method:"POST",

        body:formData

    })

    .then(response=>response.text())

    .then(data=>{

        alert("✅ Status Updated Successfully");

    });

}