Class Deliverer implements Observer
        {
            String Username;
            String Location;
            String Order;
            Bool Availability;

            void recieveUpdate()
            {
                //this calls will recieve updates from currentStatus class and change the variables arrodingly.
            }

            void sendUpdate()
            {
                //this class wil send updates to currentStatus when something changes, to be send to the database
            }

        }