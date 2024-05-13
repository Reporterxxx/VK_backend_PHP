<?php
interface OrderInterface {
    // метод для создания заказа
    public function create(array $items): Order;
    // метод для вычисления суммы заказа
    public function calculateTotal(): float;
    // метод для оформленимя заказа
    public function placeOrder(): void;
}

class Order implements OrderInterface {
    private $id;
    private $userId;
    private $items;
    private $total;
    private $status;
    // Реализация методов указанных выше в OrderInterface
}

interface OrderItemInterface {
    // метод для создания заказанного продукта
    public function create(item $item, int $quantity): OrderItem;
    // метод для подсчета общей суммы заказа на основе всех заказанных товаров
    // и каждого их количества
    public function calculateTotal(): float;
}

class OrderItem implements OrderItemInterface {
    private $id;
    private $orderId;
    private $itemId;
    private $quantity;
    private $total;
    // Реализация методов указанных выше в OrderInterface
}

interface ItemInterface {
    // Метод для поиска товара и получения данных о нем по id
    public function find(int $id): item;
}

class Item implements ItemInterface {
    private $id;
    private $name;
    private $price;
    private $quantity;

    // Реализация метода указанного выше в itemInterface
}

// Класс OrderService
class OrderService {
    private $orderRepository;
    private $orderItemRepository;
    private $itemRepository;

    public function createOrder(int $userId, array $items): Order {
        $order = new Order();
        $order->setUserId($userId);
        $order->setItems($items);

        foreach ($items as $item) {
            $item = $this->itemRepository->find($item['id']);
            $orderItem = new OrderItem();
            $orderItem->setItemId($item->getId());
            $orderItem->setQuantity($item['qunatity']);
            $order->addItem($orderItem);
        }

        $this->orderRepository->save($order);

        return $order;
    }

    public function placeOrder(Order $order): void {
        $order->setStatus('processing');
        $this->orderRepository->update($order);
    }

}
