<template>
    <section>
        <form method="POST">
            <div class="mb-2">
              <label for="" class="form-label">Name</label>
              <input type="text" name="Name" class="form-control" placeholder="Name" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Age</label>
                <input type="number" name="Age" class="form-control" placeholder="Age" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Address</label>
                <input type="text" name="Address" class="form-control" placeholder="Address" required>
            </div>
            <div class="form-group">
                <label for="sel1">City</label>
                <select name="city_id" class="form-control" id="sel1">
                </select>
              </div>
            <div class="mb-2">
                <label for="" class="form-label">Phone</label>
                <input type="number" name="Phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Date of birth</label>
                <input type="date"  name="Date_of_birth" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </section>
</template>

<script>
  export default {
    name: "form"
  }
</script>