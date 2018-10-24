pragma solidity ^0.4.0;

contract School{

    string public nameSchool;
    address public onwer;
    uint public totalDiploma;//tổng số bằng trường đang có
    
    function School(){
        nameSchool='SGU';
        onwer=msg.sender;
    }
    
    //xét điều kiện chỉ trường mới được tạo bằng cho sinnh viên
    modifier onwerCondition{
        require(msg.sender==onwer);
        _;
    }
    
    function getSchoolInformation() public returns(string,address,uint) {
        return (nameSchool,onwer,totalDiploma);
    }
    
    struct Diploma{
        string idDiploma;//có thể là hash trong ipfs
    }
    
    //danh sách các bằng thuộc trường
    mapping(unit=> Diploma) public diplomas;
    
    
    function setDiploma(string _idDiploma) public onwerCondition{
        // chua hoan thanh
        diplomas[totalDiploma].idDiploma=_idDiploma;
            
        totalDiploma++;
    }
    
}

