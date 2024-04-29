<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $allowedFields = ['client_id', 'event_date', 'guest_count', 'total_amount']; // Aggiungi altri campi della prenotazione se necessario
}
