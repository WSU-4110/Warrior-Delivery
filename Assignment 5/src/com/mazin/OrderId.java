package com.mazin;

public class OrderId
{
    private int id;
    private String name;
    private int quantity;
    private double price;

    /* using this. function so that the class parameters can be called,
    even if the datatype has a different name*/
    public OrderId(int id, String name, int quantity, double price)
    {
        this.id = id;
        this.name = name;
        this.quantity = quantity;
        this.price = price;
    }

  /* The idea behind returnOrder is to take the parameters that have
  * been initialized and assigned a value in OrderId and return them
  * in a string format to be viewed by the admin.*/
    public String   returnOrder()
    {
        return "Order{" +
                "id = " + id +
                ", name = " + name +
                ", quantity = " + quantity +
                ", price = $" + price + " .";
                }
}
