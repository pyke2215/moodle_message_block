
<h1>List of messages</h1>
{{#messages}}
    <div class="localmessage{{messagetype}} card mt-2 mb-2">
        <div class="card-body">
            <p>{{messagetext}}</p>
            <input type="button" class="btn btn-primary" value="Edit message" onclick="location.href='{{editurl}}?messageid={{id}}'">
            <input type="button" class="local_messageid{{id}} btn btn-danger local_message_delete_button" value="Delete message">
        </div>
    </div>
{{/messages}}

<hr>
<input type="button" class="btn btn-primary" value="Create message" onclick="location.href='{{editurl}}'">
<input type="button" class="btn btn-secondary" value="Bulk edit messages" onclick="location.href='{{bulkediturl}}'">