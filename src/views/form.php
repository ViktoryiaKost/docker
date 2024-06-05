<form id="form">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">First and last name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your first and last name">
        </div>
        <div class="mb-3">
            <select class="form-select" name="gender" aria-label="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select" name="status" aria-label="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" >Add</button>
    </form>
