function ValidateContactForm()
{
    var doct_name = document.doct_form.doct_name;
    var doct_designation = document.doct_form.doct_designation;
    var doct_gender = document.doct_form.doct_gender;
    var doct_department = document.doct_form.doct_department;
    var doct_description = document.doct_form.doct_description;
    var doct_address = document.doct_form.doct_address;
    var doct_contact = document.doct_form.doct_contact;
    var doct_email = document.doct_form.doct_email;
    var doct_duty_time = document.doct_form.doct_duty_time;
    var doct_joinning_date = document.doct_form.doct_joinning_date;
    var status = document.doct_form.status;
    var doct_image = document.doct_form.doct_image;

    if (doct_name.value == "")
    {
        window.alert("Please enter your name.");
        doct_name.focus();
        return false;
    }
    if (doct_designation.value == "")
    {
        window.alert("Please enter your Designation.");
        doct_designation.focus();
        return false;
    }
    if (doct_gender.value == "")
    {
        window.alert("Please enter your gender.");
        doct_gender.focus();
        return false;
    }
    if (doct_department.value == "")
    {
        window.alert("Please enter your Department.");
        doct_department.focus();
        return false;
    }
    if (doct_description.value == "")
    {
        window.alert("Please enter your Description.");
        doct_description.focus();
        return false;
    }
    if (doct_address.value == "")
    {
        window.alert("Please enter your Address.");
        doct_address.focus();
        return false;
    }

    if (doct_contact.value == "")
    {
        window.alert("Please enter your contact.");
        doct_address.focus();
        return false;
    }



    if (doct_email.value == "")
    {
        window.alert("Please enter a valid e-mail address.");
        doct_email.focus();
        return false;
    }
    if (doct_email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        doct_email.focus();
        return false;
    }
    if (doct_email.value.indexOf(".", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        doct_email.focus();
        return false;
    }
    if (doct_duty_time.value == "")
    {
        window.alert("Please enter your duty time.");
        doct_duty_time.focus();
        return false;
    }
    if (doct_joinning_date.value == "")
    {
        window.alert("Please enter your joinning date");
        doct_joinning_date.focus();
        return false;
    }
    if (status.selectedIndex < 1)
{
    alert("Please selected status.");
    status.focus();
    return false;
}
    return true;
}



