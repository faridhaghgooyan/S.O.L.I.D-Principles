<?php
class UserManager {
    public function createUser($userData) {
        // Create user logic
    }
    
    public function deleteUser($userId) {
        // Delete user logic
    }
    
    public function updateUser($userId, $newData) {
        // Update user logic
    }
    
    public function sendEmail($userId, $message) {
        // Sending email logic
    }
}
/**
 * the UserManager class has an additional responsibility of sending emails, violating the SRP.
 */