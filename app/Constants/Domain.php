<?php

namespace App\Constants;

use App\Libraries\Utils;

class Domain
{
    const INVOICENINJA_COM = 1;
    const INVOICE_SERVICES = 2;

    public static function getDomainFromId($id)
    {
        switch ($id) {
            case static::INVOICENINJA_COM:
                return 'cfac.com.tn';
            case static::INVOICE_SERVICES:
                return 'invoice.services';
        }

        return 'cfac.com.tn';
    }

    public static function getLinkFromId($id)
    {
        return 'https://app.' . static::getDomainFromId($id);
    }

    public static function getEmailFromId($id)
    {
        return 'maildelivery@' . static::getDomainFromId($id);
    }
}
