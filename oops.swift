import Foundation

protocol shape{
    func draw()
    func giveTheFee(fee:Int,drawer:drawer)
}
class rectangle: shape{
    func draw(){
        print("printing rectangle")
    }
    func giveTheFee(fee:Int,drawer:drawer){
         print("fee for rectangle \(fee)")
    }
    
}
class triangle: shape{
    func draw(){
        print("printing triangle")
    }
    func giveTheFee(fee:Int,drawer:drawer){
    let handler = triangleaccounthandler(using:self)
        handler.calculateDiscount(price:fee,drawer:drawer,shape:self)
    }
    
}
class triangleaccounthandler{
   func calculateDiscount(price:Int,drawer:drawer,shape:triangle){
        print("i am discounting for triangle \(price)")
         print("since it's a triangle fee will be multiplied by three \(price)")
         
         drawer.total = (10 + drawer.price) * 3
         
         drawer.printTotal()
    }
    init(using:triangle){
        
    }
}
class drawer{
    var price = Int()
    
    var total = 0
    
    func draw(shape: shape){
        shape.draw()
    }
    
    func giveTheFeeForShape(shape: shape){
        shape.giveTheFee(fee:10,drawer:self)
    }
    
    func printTotal(){
        print("total price is \(total)")
    }
    
    
}
var draw = drawer()
var mytrio = triangle()
draw.giveTheFeeForShape(shape: mytrio)