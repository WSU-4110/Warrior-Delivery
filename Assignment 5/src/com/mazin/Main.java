package com.mazin;

public class Main {

    public static void main(String[] args) {
        int id = 0;
        String name = "placeholder";
        int quantity = 0;
        double price = 0;
        var getHistory = new OrderHistory();
        var viewHistory = new OrderId(id, name, quantity, price);

        for (var i = 0; i < getHistory.getOrders().size(); i++)
        {
            var order = getHistory.getOrders().get(i);
            System.out.println(order);
        }

        for (var i = 0; i < getHistory.getOrders().size(); i++)
        {
            var orderViewer = viewHistory.returnOrder();

        }

    }
}
