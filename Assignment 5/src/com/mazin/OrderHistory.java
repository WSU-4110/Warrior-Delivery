package com.mazin;

import java.util.ArrayList;
import java.util.List;

public class OrderHistory
{
    private List<String> orders = new ArrayList<>();

    public void push(String order) //adds an order for viewing
    {
        orders.add(order);
    }

    public String pop()
    {
        var lastItem= orders.size() - 1;
        var lastOrder = orders.get(lastItem);
        orders.remove(lastOrder);

        return lastOrder;
    }

    public ListIterator createIterator()
    {
        return new ListIterator();
    }

    public List<String>getOrders()
    {
        return orders;
    }

    //Fully functional iterator pattern for history view.
    public class ListIterator implements Iterator
    {
        private OrderHistory history;
        private int index;

        public ListIterator(OrderHistory history)
        {
            this.history = history;

        }

        public ListIterator() {

        }

        @Override
        public boolean hasNext() {
            return (index < history.orders.size());
        }

        @Override
        public String current() {
            return history.orders.get(index);
        }

        @Override
        public void next()
        {
            index++;
        }
    }

}
