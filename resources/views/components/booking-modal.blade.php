<div id="bookingModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2><i class="fas fa-calendar-check"></i> Book a Free Trial</h2>
        <p>Choose a course and time that fits you.</p>
        <form method="POST" action="{{ route('booking.store') }}">
            @csrf
            <select name="course" required>
                <option value="">Select course</option>
                <option>Conversation Skills</option>
                <option>Grammar Essentials</option>
                <option>Egyptian Curriculum</option>
                <option>Gulf Curriculum</option>
            </select>
            <input type="email" name="email" placeholder="Your email" required>
            <input type="date" name="preferred_date" required>
            <textarea name="notes" placeholder="Additional notes (optional)" rows="3"></textarea>
            <button type="submit">Request Booking</button>
        </form>
    </div>
</div>