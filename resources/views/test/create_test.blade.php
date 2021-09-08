<form method="POST" 

      action="{{url('/test')}}" enctype="multipart/form-data">

          @csrf

          <div class="field">

            <label class="label">Name</label>

            <div class="control">

              <input class="input" type="text" placeholder="Text input" name ="name">

            </div>

          </div>



      <div class="field">

        <label class="label">Address</label>

        <div class="control has-icons-left has-icons-right">

          <textarea class='textarea' placeholder="Enter article here..." value="" name="address"></textarea>

        </div>

      </div>

      <div class="field">

        <label class="label">Age</label>

        <div class="control has-icons-left has-icons-right">

          <textarea class='textarea' placeholder="Enter article here..." value="" name="age"></textarea>

        </div>

      </div>


<br>

<div>

    <button class="button is-success">Submit</button>

  </div>

  </form>